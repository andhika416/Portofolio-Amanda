document.addEventListener('DOMContentLoaded', function () {
  const animatedElements = document.querySelectorAll('.animate');
  const siteHeader = document.querySelector('.site-header');
  const navLinks = document.querySelectorAll('.site-nav a');
  const sections = Array.from(document.querySelectorAll('main section[id]'));

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.15,
    }
  );

  animatedElements.forEach((element) => observer.observe(element));

  const setActiveSection = (sectionId) => {
    navLinks.forEach((link) => {
      const isActive = link.getAttribute('href') === `#${sectionId}`;
      link.classList.toggle('active', isActive);
    });

    const activeSection = document.getElementById(sectionId);
    const isLightSection = activeSection?.classList.contains('light');
    siteHeader?.classList.toggle('on-light', Boolean(isLightSection));
  };

  const getHeaderOffset = () => {
    if (!siteHeader) return 0;
    return siteHeader.offsetHeight + 16;
  };

  const getDocumentTop = (element) => {
    let top = 0;
    let currentElement = element;

    while (currentElement) {
      top += currentElement.offsetTop;
      currentElement = currentElement.offsetParent;
    }

    return top;
  };

  const scrollToSection = (targetElement) => {
    const scrollAnchor =
      targetElement.querySelector('.section-header') || targetElement;
    const targetTop = getDocumentTop(scrollAnchor) - getHeaderOffset();

    window.scrollTo({
      top: Math.max(targetTop, 0),
      behavior: 'smooth',
    });
  };

  const updateActiveSection = () => {
    const scrollPosition = window.scrollY + getHeaderOffset();
    let currentSection = sections[0];

    sections.forEach((section) => {
      if (scrollPosition >= section.offsetTop) {
        currentSection = section;
      }
    });

    if (currentSection) {
      setActiveSection(currentSection.id);
    }
  };

  updateActiveSection();
  window.addEventListener('scroll', updateActiveSection, { passive: true });
  window.addEventListener('resize', updateActiveSection);

  navLinks.forEach((link) => {
    link.addEventListener('click', function (event) {
      const targetId = this.getAttribute('href');
      if (!targetId || !targetId.startsWith('#')) {
        return;
      }

      event.preventDefault();
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        setActiveSection(targetElement.id);
        scrollToSection(targetElement);
      }
    });
  });

  // Handle other links to the contact section (e.g. hero button, card links)
  const contactAnchors = Array.from(document.querySelectorAll('a[href="#contact"]'));
  contactAnchors.forEach((link) => {
    if (link.closest('.site-nav')) return; // already handled
    link.addEventListener('click', function (event) {
      event.preventDefault();
      const targetElement = document.getElementById('contact');
      if (targetElement) {
        setActiveSection('contact');
        scrollToSection(targetElement);
      }
    });
  });

  const avatarSlider = document.querySelector('.avatar-slider');
  if (avatarSlider) {
    const slides = Array.from(avatarSlider.querySelectorAll('.avatar-slide'));
    const prevButton = avatarSlider.querySelector('.slider-control.prev');
    const nextButton = avatarSlider.querySelector('.slider-control.next');
    const dots = Array.from(avatarSlider.querySelectorAll('.slider-dot'));
    let currentSlide = 0;

    const updateSlider = (index) => {
      currentSlide = (index + slides.length) % slides.length;
      slides.forEach((slide, slideIndex) => {
        slide.classList.toggle('active', slideIndex === currentSlide);
      });
      dots.forEach((dot, dotIndex) => {
        dot.classList.toggle('active', dotIndex === currentSlide);
      });
    };

    prevButton?.addEventListener('click', () => updateSlider(currentSlide - 1));
    nextButton?.addEventListener('click', () => updateSlider(currentSlide + 1));

    setInterval(() => {
      updateSlider(currentSlide + 1);
    }, 4000);
  }

  const updateCertificatePreview = (panel, item) => {
    const previewSrc = item.getAttribute('data-cert-preview');
    const previewFrameWrap = panel.querySelector('.cert-preview-frame-wrap');

    panel.querySelectorAll('.cert-detail-item').forEach((entry) => {
      entry.classList.toggle('active', entry === item);
    });

    if (previewFrameWrap) {
      previewFrameWrap.setAttribute('data-cert-preview', previewSrc);
    }

    renderCertificatePreview(panel, previewSrc);
  };

  const renderCertificatePreview = async (panel, previewSrc) => {
    const previewPages = panel.querySelector('#cert-preview-pages');
    const previewFrameWrap = panel.querySelector('.cert-preview-frame-wrap');
    if (!previewPages || !previewFrameWrap || !window.pdfjsLib || !previewSrc) return;

    const renderToken = `${Date.now()}`;
    previewPages.dataset.renderToken = renderToken;
    previewPages.innerHTML = '';
    previewFrameWrap.scrollTop = 0;
    previewFrameWrap.style.height = '';

    const loadingTask = window.pdfjsLib.getDocument(previewSrc);
    const pdf = await loadingTask.promise;
    const firstPage = await pdf.getPage(1);
    const baseViewport = firstPage.getViewport({ scale: 1 });
    const scale = previewFrameWrap.clientWidth / baseViewport.width;

    for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber += 1) {
      const page = await pdf.getPage(pageNumber);
      const viewport = page.getViewport({ scale });
      const pageContainer = document.createElement('div');
      pageContainer.className = 'cert-preview-page';

      const canvas = document.createElement('canvas');
      const context = canvas.getContext('2d');
      canvas.width = viewport.width;
      canvas.height = viewport.height;
      pageContainer.appendChild(canvas);
      previewPages.appendChild(pageContainer);

      await page.render({
        canvasContext: context,
        viewport,
      }).promise;

      if (previewPages.dataset.renderToken !== renderToken) return;
      canvas.style.width = '100%';
      canvas.style.height = 'auto';

      if (pageNumber === 1) {
        previewFrameWrap.style.height = `${Math.ceil(viewport.height)}px`;
      }
    }
  };

  document.querySelectorAll('.cert-detail-item').forEach((item) => {
    const panel = item.closest('.cert-detail');
    if (!panel) return;

    item.addEventListener('click', () => {
      updateCertificatePreview(panel, item);
    });
  });

  document.querySelectorAll('.cert-detail').forEach((panel) => {
    const firstItem = panel.querySelector('.cert-detail-item.active') || panel.querySelector('.cert-detail-item');
    const initialPreviewSrc =
      firstItem?.getAttribute('data-cert-preview') ||
      panel.querySelector('.cert-preview-frame-wrap')?.getAttribute('data-cert-preview');

    if (initialPreviewSrc) {
      renderCertificatePreview(panel, initialPreviewSrc);
    }
  });
});

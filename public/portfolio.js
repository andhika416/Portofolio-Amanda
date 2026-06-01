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

  const gallerySlider = document.querySelector('.gallery-slider');
  if (gallerySlider) {
    const galleryTrack = gallerySlider.querySelector('.gallery-track');
    const galleryCards = Array.from(gallerySlider.querySelectorAll('.gallery-card'));
    const setsCount = 3;
    const originalCardCount = Math.floor(galleryCards.length / setsCount);
    const middleSetIndex = 1;
    const thirdSetIndex = 2;
    const galleryStepMs = 1800;
    const galleryTransition = 'transform 0.85s cubic-bezier(0.22, 1, 0.36, 1)';
    let isGalleryPaused = false;
    let activeCenteredCard = null;
    let activeLocalIndex = 0;
    let activeSetIndex = middleSetIndex;
    let galleryInterval = null;
    let isTransitioning = false;
    let pendingWrapReset = false;

    const getCard = (setIndex, localIndex) =>
      galleryCards[setIndex * originalCardCount + localIndex] || null;

    const getCenteredOffset = (card) => {
      if (!card) return 0;
      return card.offsetLeft - (gallerySlider.clientWidth - card.offsetWidth) / 2;
    };

    const applyGalleryOffset = (offset, withTransition = true) => {
      if (!galleryTrack) return;
      galleryTrack.style.transition = withTransition ? galleryTransition : 'none';
      galleryTrack.style.transform = `translate3d(${-offset}px, 0, 0)`;
    };

    const setCenteredCard = (card) => {
      if (card === activeCenteredCard) return;
      if (activeCenteredCard) {
        activeCenteredCard.classList.remove('is-centered');
      }
      if (card) {
        card.classList.add('is-centered');
      }
      activeCenteredCard = card;
    };

    const setCenteredCardWithoutAnimation = (card) => {
      if (!card) return;

      if (activeCenteredCard && activeCenteredCard !== card) {
        activeCenteredCard.classList.add('no-zoom-transition');
      }

      card.classList.add('no-zoom-transition');
      setCenteredCard(card);

      requestAnimationFrame(() => {
        if (activeCenteredCard) {
          activeCenteredCard.classList.remove('no-zoom-transition');
        }
        galleryCards.forEach((entry) => {
          if (entry !== activeCenteredCard) {
            entry.classList.remove('no-zoom-transition');
          }
        });
      });
    };

    const syncGalleryPosition = (setIndex, localIndex, withTransition = true) => {
      const card = getCard(setIndex, localIndex);
      if (!card) return;
      applyGalleryOffset(getCenteredOffset(card), withTransition);
      setCenteredCard(card);
    };

    const resetToMiddleSet = () => {
      activeSetIndex = middleSetIndex;
      const card = getCard(activeSetIndex, activeLocalIndex);
      if (!card) return;
      applyGalleryOffset(getCenteredOffset(card), false);
      setCenteredCardWithoutAnimation(card);
    };

    const moveToNextGalleryCard = () => {
      if (isGalleryPaused || isTransitioning || originalCardCount === 0) return;

      isTransitioning = true;
      const nextLocalIndex = (activeLocalIndex + 1) % originalCardCount;
      const nextSetIndex =
        activeLocalIndex === originalCardCount - 1 ? thirdSetIndex : activeSetIndex;

      activeLocalIndex = nextLocalIndex;
      activeSetIndex = nextSetIndex;
      pendingWrapReset = activeSetIndex === thirdSetIndex;
      syncGalleryPosition(activeSetIndex, activeLocalIndex, true);
    };

    gallerySlider.addEventListener('mouseenter', () => {
      isGalleryPaused = true;
    });

    gallerySlider.addEventListener('mouseleave', () => {
      isGalleryPaused = false;
    });

    activeLocalIndex = 0;
    activeSetIndex = middleSetIndex;
    syncGalleryPosition(activeSetIndex, activeLocalIndex, false);

    galleryInterval = window.setInterval(moveToNextGalleryCard, galleryStepMs);

    galleryTrack?.addEventListener('transitionend', (event) => {
      if (event.propertyName !== 'transform') return;

      if (pendingWrapReset) {
        pendingWrapReset = false;
        requestAnimationFrame(() => {
          resetToMiddleSet();
          requestAnimationFrame(() => {
            galleryTrack.style.transition = galleryTransition;
            isTransitioning = false;
          });
        });
        return;
      }

      isTransitioning = false;
    });

    window.addEventListener('resize', () => {
      syncGalleryPosition(activeSetIndex, activeLocalIndex, false);
    });
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
    const previewFrame = panel.querySelector('#cert-preview-frame');
    const previewFrameWrap = panel.querySelector('.cert-preview-frame-wrap');
    if (!previewFrame || !previewFrameWrap || !previewSrc) return;

    const renderToken = `${Date.now()}`;
    previewFrame.dataset.renderToken = renderToken;
    previewFrameWrap.scrollTop = 0;
    previewFrameWrap.style.height = '';
    previewFrame.removeAttribute('src');

    if (window.pdfjsLib) {
      try {
        const loadingTask = window.pdfjsLib.getDocument(previewSrc);
        const pdf = await loadingTask.promise;
        const firstPage = await pdf.getPage(1);
        const baseViewport = firstPage.getViewport({ scale: 1 });
        const previewWidth = previewFrameWrap.clientWidth;

        if (previewWidth > 0) {
          const previewHeight = Math.ceil(
            previewWidth * (baseViewport.height / baseViewport.width)
          );
          previewFrameWrap.style.height = `${previewHeight}px`;
        }
      } catch (error) {
        previewFrameWrap.style.height = '1120px';
      }
    }

    if (previewFrame.dataset.renderToken !== renderToken) return;

    previewFrame.src = `${previewSrc}#page=1&zoom=page-fit&toolbar=0&navpanes=0&scrollbar=1`;
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

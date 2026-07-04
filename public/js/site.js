document.addEventListener('DOMContentLoaded', () => {
  const stickyHeader = document.querySelector('.brand-nav-wrap');
  const brandTabs = Array.from(document.querySelectorAll('[data-brand-target]'));
  const brandSections = Array.from(document.querySelectorAll('[data-brand-section]'));

  const showFullBrandTab = (tab) => {
    const nav = tab.closest('.brand-nav');
    if (!nav) {
      return;
    }

    const navRect = nav.getBoundingClientRect();
    const tabRect = tab.getBoundingClientRect();
    const padding = 8;
    const clippedLeft = tabRect.left < navRect.left + padding;
    const clippedRight = tabRect.right > navRect.right - padding;

    if (!clippedLeft && !clippedRight) {
      return;
    }

    const centeredLeft = tab.offsetLeft - ((nav.clientWidth - tab.offsetWidth) / 2);

    nav.scrollTo({
      left: Math.max(0, centeredLeft),
      behavior: 'smooth',
    });
  };

  const setActiveBrand = (brandId) => {
    brandTabs.forEach((tab) => {
      const active = tab.dataset.brandTarget === brandId;
      tab.classList.toggle('active', active);
      tab.setAttribute('aria-current', active ? 'true' : 'false');

      if (active) {
        showFullBrandTab(tab);
      }
    });
  };

  const scrollToBrand = (brandId) => {
    const section = document.getElementById(brandId);
    if (!section) {
      return;
    }

    section.scrollIntoView({ behavior: 'smooth', block: 'start' });
    setActiveBrand(brandId);
    history.replaceState(null, '', `#${brandId}`);
  };

  const getActiveBrandFromScroll = () => {
    if (brandSections.length === 0) {
      return null;
    }

    const headerOffset = (stickyHeader?.offsetHeight ?? 0) + 24;
    const activationLine = headerOffset + ((window.innerHeight - headerOffset) * 0.35);
    let activeBrandId = brandSections[0].id;

    for (const section of brandSections) {
      const rect = section.getBoundingClientRect();

      if (rect.top <= activationLine) {
        activeBrandId = section.id;
      } else {
        break;
      }
    }

    return activeBrandId;
  };

  let scrollRaf = 0;
  const syncActiveBrand = () => {
    scrollRaf = 0;
    const activeBrandId = getActiveBrandFromScroll();
    if (activeBrandId) {
      setActiveBrand(activeBrandId);
    }
  };

  const onScroll = () => {
    if (scrollRaf) {
      return;
    }

    scrollRaf = window.requestAnimationFrame(syncActiveBrand);
  };

  brandTabs.forEach((tab) => {
    tab.addEventListener('click', (event) => {
      event.preventDefault();
      scrollToBrand(tab.dataset.brandTarget);
    });
  });

  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', onScroll);

  if (location.hash) {
    const targetId = location.hash.slice(1);
    window.requestAnimationFrame(() => scrollToBrand(targetId));
  } else if (brandTabs.length > 0) {
    setActiveBrand(brandTabs[0].dataset.brandTarget);
  }

  onScroll();
});

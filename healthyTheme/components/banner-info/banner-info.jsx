try {
  const bannerInfo = document.querySelector('.banner-info');
  const btnClose = bannerInfo.querySelector('.btn-close');

  btnClose.addEventListener('click', () => {
    bannerInfo.classList.add('d-none');
  })
} catch (e) {
  console.log(e);
}

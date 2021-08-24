try {
  const cookieBar = document.querySelector('.cookie-bar');
  const btnClose = document.querySelector('.cookie-bar .btn-close');

  const cookieData = document.cookie.match('(^|;) ?cookie-usage-confirm=([^;]*)(;|$)');
  const cookieValue = cookieData ? cookieData[2] : null;

  if (cookieValue !== 'confirmed') {
    cookieBar.classList.add('active');
  }

  if(btnClose && cookieBar) {
    btnClose.addEventListener('click', () => {
      document.cookie = 'cookie-usage-confirm=confirmed; path=/'
      cookieBar.classList.remove('active');
    })
  }

} catch (e) {

}

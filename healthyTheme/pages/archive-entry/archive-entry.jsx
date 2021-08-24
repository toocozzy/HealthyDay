import $ from 'jquery';
import AOS from '../../../node_modules/aos/dist/aos';
import '../../components/navigation/navigation.jsx';
import '../../components/cookie-bar/cookie-bar.jsx';
import '../../components/banner-info/banner-info.jsx';

try {
  AOS.init({
    duration: 1200,
  })


  const postsList = document.querySelector('.posts-list');
  const btnShowMore = document.querySelector('.btn-show-more');

  hideShowMoreBtn();

  btnShowMore.addEventListener('click', e => {
    const postsPerPage = e.target.getAttribute('data-posts-per-page');
    const newPostsPerPage = parseInt(postsPerPage, 10) + 4;
    loadMorePosts(newPostsPerPage);
  })

  function hideShowMoreBtn() {
    const postsPerPage = parseInt( btnShowMore.getAttribute('data-posts-per-page'), 10);
    const postsLength = parseInt( btnShowMore.getAttribute('data-posts-length'), 10);

    console.log(postsPerPage, postsLength);

    if(postsPerPage >= postsLength) {
      btnShowMore.classList.add('d-none');
    }
  }

  function loadMorePosts (postsPerPage) {
    const params = {
      'action': 'load_posts_by_ajax',
      'security': '<?php echo wp_create_nonce("load_more_posts"); ?>',
      post_type: 'entry',
      post_template: 'card-entry',
      posts_per_page: postsPerPage
    };

    $.post('<?php echo admin_url( "admin-ajax.php" ); ?>', params, response => {
      if (response !== '') {
        btnShowMore.setAttribute('data-posts-per-page', postsPerPage)
        hideShowMoreBtn();
        return postsList.innerHTML = response;
      }
    });
  }
} catch(err) {
  console.log(err);
}

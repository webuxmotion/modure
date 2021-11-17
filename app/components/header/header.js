let burderElements = document.querySelectorAll('.js-burger');
let headerElement = document.querySelector('.js-header');
let navItemElements = document.querySelectorAll('.js-nav-item');

if (burderElements.length) {
    burderElements.forEach((el) => {
        el.addEventListener('click', () => {
            headerElement.classList.toggle('is-active');
        });
    });
}

if (navItemElements.length) {
  navItemElements.forEach((el) => {
      el.addEventListener('click', () => {
          headerElement.classList.remove('is-active');
      });
  });
}
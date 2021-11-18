<header class="header js-header">
  <?=$this->component('logo')?>
  <div class="header__nav-list-wrapper">
    <ul class="header__nav-list">
      <li class="header__nav-item">
        <a href="#portfolio" class="js-nav-item">Portfolio</a>
      </li>
      <li class="header__nav-item">
        <a href="#about" class="js-nav-item">About</a>
      </li>
      <li class="header__nav-item">
        <a href="#contacts" class="js-nav-item">Contacts</a>
      </li>
      <li class="header__close-item">
        <span class="header__close-button js-nav-item">
          <?=icon('delete')?>
        </span>
      </li>
    </ul>
  </div>
  <div class="header__burger js-burger">
    <span class="header__burger-action header__burger-action--show">SHOW</span>
    <span class="header__burger-action header__burger-action--hide">HIDE</span>
    <span>MENU</span>
  </div>
</header>
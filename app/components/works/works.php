<div class="works">
  <?=$this->component('block-anchor', ['id' => 'portfolio'])?>
  <h2 class="works__title">Portfolio</h2>
  <div class="works__list">
    <div class="works__item">
    <?=$this->component('card', [
      'image' => '/works/work-1.jpg',
      'href' => 'https://www.artstation.com/artwork/VgQeLb'
    ]);?>
    </div>
    <div class="works__item">
    <?=$this->component('card', [
      'image' => '/works/work-2.jpg',
      'href' => 'https://www.artstation.com/artwork/18GwKG'
    ]);?>
    </div>
    <div class="works__item">
    <?=$this->component('card', [
      'image' => '/works/work-3.jpg',
      'href' => 'https://www.behance.net/gallery/89585345/Eclipse'
    ]);?>
    </div>
    <div class="works__item">
    <?=$this->component('card', [
      'image' => '/works/work-4.jpg',
      'href' => 'https://www.artstation.com/artwork/ELDR32'
    ]);?>
    </div>
    
    
    
    
  </div>
</div>
<?hh // strict

class :fbbranding extends :x:element {
  category %flow;

  protected string $tagName = 'fbbranding';

  protected function render(): XHPRoot {
    return
      <span class="branding-el">
        <svg class="icon icon--arrow-up">
          <use href="#icon--arrow-up" />
        </svg>
        <span class="has-icon"> {tr('  Monash University')}</span>
      </span>;
  }
}

@php
$price_items = [
  [
    'caption' => 'Вариант 1',
    'items' => [[ 'service' => 'Месячный бухучет (консультации + в пределах 100 транзакций)', 'price' => '2,000 AED в месяц' ], [ 'service' => 'Каждые последующий 100 транзакций', 'price' => '+1,000 AED в месяц' ]]
  ],
  [
    'caption' => 'Вариант 2',
    'items' => [[ 'service' => 'Квартальный учет для малого бизнеса если компания уже <br> зарегистрирована к НДС (до 10 документов в месяц, до 2х сотрудников)', 'price' => '5,000 AED за квартал <br> (декларация по НДС в цене)' ]]
  ],
  [
    'caption' => 'Вариант 3',
    'items' => [[ 'service' => 'Квартальный учет для малого бизнеса без регистрации к НДС <br> (до 10 документов в месяц, до 2х сотрудников)', 'price' => '3,000 AED за квартал' ]]
  ],
  [
    'caption' => 'Другие услуги',
    'items' => [
      [ 'service' => 'Внесение в учет транзакций за предыдущие периоды', 'price' => 'цена договорная' ],
      [ 'service' => 'Регистрация к НДС (VAT)', 'price' => '2,000 AED разово' ],
      [ 'service' => 'Подача НДС (VAT) отчета', 'price' => '2,000 AED ежеквартально' ],
      [ 'service' => 'Подача запроса на возврат НДС (форма VAT 311)', 'price' => 'цена договорная' ],
      [ 'service' => 'Регистрация к Корпоративному налогу', 'price' => '600 AED разово (для компаний уже зарегистрированных к НДС), <br> 1,000 AED разово (для первичной регистрации в FTA' ],
      [ 'service' => 'Внесение обязательных изменений в информации о компании', 'price' => '500 AED' ],
      [ 'service' => 'Регистрация доступа к goAML порталу в Финансовой Полиции', 'price' => '1,000 AED' ],
      [ 'service' => 'Консультация базовая', 'price' => '1,000 AED в час' ],
      [ 'service' => 'Организация проведения аудита (подготовка и передача всей документации для проведения аудита, взаимодействие с аудитором по всем вопросам в отчетности компании)', 'price' => '2,000 AED разово' ],
      [ 'service' => 'Лицензия на бухгалтерский софт Quickbooks Online', 'price' => '100 AED разово' ],
    ]
  ],
]
@endphp

<div class="container">
  <div class="center-column">
    <div class='header'>
      <a class="logo" href="/"><img src="public/res/logo.svg" alt="Logo" /></a>
      <div class="menu">
        <div>Генератор WPS файлов</div>
        <div>Прайслист</div>
        <div class="lang-badge">RU</div>
      </div>
    </div>
    <h1>Базовый прайслист</h1>
    <div class="sub-header">Цены не включают 5% НДС <div class="info-icon" title="Объяснение про НДС"></div></div>

    @if (isset($price_items))
      @foreach($price_items as $block)
      <div class="pricelist-block">
        <div class="pricelist-header"><div class="check-mark"></div>{{ $block['caption'] }}</div>
        @foreach($block['items'] as $item)
        <div class="pricelist-item-container">
          <div class="pricelist-item">
            <div>{!! $item['service'] !!}</div>
            <div class="priceblock">{!! $item['price'] !!}</div>
          </div>
        </div>
        @endforeach
      </div>
      @endforeach
    @endif
  </div>

  <div class="footer-container">
    <div class="footer">
      <div class="footer-top">
        <div><a class="logo" href="/"><img src="public/res/foter-logo.svg" alt="Logo" /></a></div>
        <div class="footer-contacts">
          <div><span class="phone"></span>+971566797475</div>
          <div><span class="mail"></span>elena@bga.ae</div>
        </div>
        <div class="footer-contacts">
          <div><span class="tg"></span>@mayustup</div>
          <div><span class="baloon"></span>JLT, Dubai, UAE</div>
        </div>
        <div class="footer-pdf">
          <div><span class="pdf"></span></div>
          <div>39140 IFZA <br /> (показать pdf)</div>
        </div>
        <div class="footer-menu">
          <div>Генератор WPS файлов</div>
          <div>Прайслист</div>
        </div>
      </div>

      <div class="footer-bottom">
        <div>Copyright © 2024</div>
        <div>Политика конфиденциальности</div>
      </div>
    </div>
  </div>
</div>

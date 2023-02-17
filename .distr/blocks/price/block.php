{% from './data.njk' import data as price %}
<section class="price lazy">
    <div class="container">
        <h2 class="price__title title">Тарифы</h2>
        <div class="price__box" id="price">
            {% for item in price %}
            <div class="price-card">
                <div class="price-card__header">
                    <div class="price-card__header-title">{{item.title | safe}}</div>
                    <div class="price-card__header-price">{{item.price | safe}}</div>
                </div>
                <p class="price-card__text">{{item.text | safe}}</p>
                <ul class="price-card__body">
                    {{item.body | safe}}
                </ul>
                <a href="https://мма.рф/user/register" class="price-card__button button">{{item.button | safe}}</a>
            </div>
            {% endfor %}
        </div>
    </div>
</section>
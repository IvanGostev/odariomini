<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Odario</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('reset.css')}}" />
    <link rel="stylesheet" href="{{ asset('main.css')}}" />
</head>
<body>
<section class="container blocks">
    <div class="block">
        <div class="block__container">
            <h1 class="block__title">
                Совсем скоро вы сможете организовать
                <span class="block__accent">незабываемые</span> моменты с Odario!
            </h1>
        </div>
        <div class="block__items">
            <img class="block__item" src="{{ asset('images/petard.svg')}}" />
            <img class="block__item" src="{{ asset('images/cake.svg')}}" />
            <img class="block__item" src="{{ asset('images/balls.svg')}}" />
        </div>
    </div>
    <div class="block">
        <img class="block__img" src="{{ asset('images/block_second.png')}}" alt="" />
    </div>
</section>
<section class="container holiday">
    <h3 class="holiday__title">
        Ищете, как сделать праздник
        <span class="holiday__accent">особенным</span>?
    </h3>
    <p class="holiday__description">
        Odario.ru —  создаваемая в настоящий момент удобная площадка для
        бронирования услуг организаторов мероприятий: квесты, тренинги, детские
        праздники, дни рождения, корпоративы и многое другое в пару кликов!
    </p>
    <div class="holiday__block first">
        <p>Квесты</p>
    </div>
    <div class="holiday__block second">
        <p>Тренинги</p>
    </div>
    <div class="holiday__block third">
        <p>
            Детские <br />
            праздники
        </p>
    </div>
    <div class="holiday__block fourth">
        <p>Дни рождения</p>
    </div>
    <div class="holiday__block fifth">
        <p>Корпоративы</p>
    </div>
</section>
<section class="container movie">
    <h3 class="movie__title">
        Совсем скоро здесь появятся услуги лучших организаторов мероприятий -
        настоящих мастеров своего дела.
    </h3>
    <p class="movie__description">
        Прямо сейчас формируются команды и создаются предприятия, которые совсем
        скоро смогут порадовать вас своим профессионализмом, яркими
        мероприятиями, интересными решениями в сфере организации досуга.
    </p>
    <img src="{{ asset('images/film.png')}}" class="movie__img" alt="" />
</section>
<section class="container blocks">
    <div class="block bottom">
        <form id="interesting" class="block__container">
            <h3 class="block__subtitle">
                Интересно? Оставьте заявку и мы уведомим Вас, когда можно
                воспользоваться услугами Odario.ru
            </h3>

            <input
                from-delete
                required
                name="email"
                type="email"
                class="block__input"
                placeholder="Введите свой адрес электронной почты"
            />
            <button from-delete class="block__button">Отправить</button>
            <div from-delete class="block__rule">
                <input type="checkbox" required value="yes" name="rules" />
                <label
                >Я подтверждаю, что ознакомлен(а) с Согласием на обработку
                    персональных данных и Политикой конфиденциальности, и даю своё
                    согласие на обработку моих персональных данных</label
                >
            </div>
            <div class="block__success hidden">
                <p>Ваша заявка принята!</p>
            </div>
        </form>
        <img class="block__balls" src="{{ asset('images/block_balls.svg')}}" />
    </div>
    <div class="block dark bottom">
        <div class="block__container bottom">
            <h5 class="block__subtitle">
                Желаете присоединиться к команде Оdario?
            </h5>
            <p class="block__description">
                Мы готовы предоставить вам безграничные перспективы для развития
                бизнеса и профессионализма в event-индустрии!
            </p>
            <a class="block__button" href="/">Присоединиться к команде</a>
        </div>
        <img class="block__petard" src="{{ asset('images/block_petard.svg')}}" alt="" />
    </div>
</section>
</body>
<script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"
></script>
<script>
    $("#interesting").submit(function (event) {
        event.preventDefault();

        $.ajax({
            url: "/email",
            type: "GET",
            data: {
                email: $('[name="email"]').val(),
            },
            success: function (response) {
                console.log("Успешный ответ");
            },
            error: function (error) {
                console.error("Ошибка запроса");
            },
        });

        $("[from-delete]").addClass("hidden");
        $(".block__success").removeClass("hidden");
    });
</script>
</html>

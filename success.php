<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vaša objednávka bola prijatá.</title>
	<link rel="stylesheet" href="default-css/subscribe-1.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="default-js/call-center-reach-time.js"></script>

</head>

<body data-long-time-text="7 минут">
	<div class="content">
		<div class="panel">
			<div class="panel-body">
				<div class="thank-you">Ďakujem! Vaša objednávka <span class="thank-you__order-id">№<?php echo $_SESSION['conversion_id']; ?></span> úspešne prijatý!</div>
                    <div class="we-will-call-you we-will-call-you__timer" style="display: none;">
                        Budeme vás kontaktovať za <span class="we-will-call-you__countdown">00:07:00</span> minút
                    </div>
                    <div class="we-will-call-you we-will-call-you__title">
                        V blízkej budúcnosti vám manažér zavolá späť, aby objasnil podrobnosti.
                    </div>
				<form class="parent x_resubmit_form">
					<div class="data js-data">
						<div class="data__block">
							<div class="data__item">
								<span class="data__key">Vaše meno:</span>
								<span class="x_client_name"><?php echo $_POST["name"]?></span>
							</div>
							<div class="data__item">
								<span class="data__key">Vaše telefónne číslo:</span>
								<span class="x_client_phone"><?php echo $_POST["phone"]?></span>
							</div>

						</div>

						<span class="js-change-btn data__change">
						<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
									d="M1 14H4.25L5.0625 13.1875M1 14V10.75L1.8125 9.9375M1 14H14M9.53125 2.21875L10.75 1L14 4.25L12.7812 5.46875M9.53125 2.21875L12.7812 5.46875M9.53125 2.21875L1.8125 9.9375M12.7812 5.46875L5.0625 13.1875M1.8125 9.9375L5.0625 13.1875"
									stroke="#777777" />
						</svg>

						Upraviť
					</span>
					</div>
					<div class="correction js-change">
						<div class="correction__block">
							<p class="correction__title">Zmena údajov</p>
							<div class="correction__close js-btn-cancel">
								<span>Zrušiť</span>
							</div>
						</div>
						<div class="correction__item">
							<label class="correction__label">Vaše meno</label>
							<input class="correction__input correction__input--name" type="text" name="name">
						</div>
						<div class="correction__item">
							<label class="correction__label">Vaše telefónne číslo</label>
							<input class="correction__input correction__input--phone" type="text" name="phone" required>
							<input type="hidden" name="id" value="<?php echo $_SESSION['conversion_id']; ?>">
							<input type="hidden" name="sid5" value ="<?php echo $_POST['sid5']; ?>"/>
						</div>
						<div class="correction__buttons button">
						<button class="button__item js-btn-change">
							Upraviť
						</button>
						<span class="button__item js-btn-cancel button__item--cancel">
							Nemeňit
						</span>
						</div>
					</div>
				</form>
				<div class="cta">
					<div class="cta__item">
						<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="20" cy="20" r="19" stroke="#FFD028" stroke-width="2" />
							<path d="M10.5 17.5L19 27.5L29 14" stroke="#FFD028" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
						Skontrolujte, či je telefón zadaný správne
					</div>
					<div class="cta__item">
						<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="20" cy="20" r="19" stroke="#FFD028" stroke-width="2" />
							<path d="M10.5 17.5L19 27.5L29 14" stroke="#FFD028" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
						Zakázať tichý režim
					</div>
					<div class="cta__item">
						<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="20" cy="20" r="19" stroke="#FFD028" stroke-width="2" />
							<path d="M10.5 17.5L19 27.5L29 14" stroke="#FFD028" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
						Telefón majte po ruke
					</div>
					<div class="cta__item">
						<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="20" cy="20" r="19" stroke="#FFD028" stroke-width="2" />
							<path d="M10.5 17.5L19 27.5L29 14" stroke="#FFD028" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
						Zdvihnite telefón z neznámeho čísla
					</div>
				</div>
			</div>
			<div class="subscribe__bar" style="display: none;">
				<span>Získajte trvalú zľavu!</span>
				<svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 6L7 12L13 6M1 1L7 7L13 1" stroke="black"></path>
				</svg>
			</div>
			<div class="subscribe">
				<div class="subscribe__cta">Získajte trvalú 50% zľavu na ďalší nákup!</div>
				<form class="subscribe__input" action="/mail-subscribe.php" method="post">
					<input
						type="email" name="email" placeholder="Zadajte svoj e-mail" autocomplete="email" required
					>
					<input type="hidden" name="id" value="<?php echo $_SESSION['conversion_id']; ?>">
					<button type="submit">
						<span class="subscribe__submit-text">Prihlásiť sa na odber</span>
						<svg width="24" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M24 9.5L-5.96046e-07 9.5M24 9.5L15.5294 18M24 9.5L15.5294 1" stroke="black"></path>
						</svg>
					</button>
				</form>
			</div>
		</div>
		<div class="footer">
			<a href="privacy.html" target="_blank">Zásady ochrany osobných údajov</a>
		</div>
	</div>
	<script>
        $('.js-change-btn').click(function () {
            let nameBeforeChange = $('.x_client_name').html();
            let phoneBeforeChange = $('.x_client_phone').html()
            $('.js-data').hide();
            setTimeout(function () {
                $('.correction__input--name').val(nameBeforeChange);
                $('.correction__input--phone').val(phoneBeforeChange);
                $('.js-change').fadeIn(100);
            }, 0);

        });
        $('.js-btn-change').click(function () {
            let nameAfterChange = $('.correction__input--name').val();
            let phoneAfterChange = $('.correction__input--phone').val()
            $('.x_client_name').html(nameAfterChange);
            $('.x_client_phone').html(phoneAfterChange);
            $('.js-change').hide();

            setTimeout(function () {
                $('.js-data').fadeIn(100);
            }, 0);
        });
        $('.js-btn-cancel').click(function () {
            $('.js-change').hide();
            setTimeout(function () {
                $('.js-data').fadeIn(100);
            }, 0);
        });
	</script>
	<script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: 2230893, hjsv: 6};
            a = o.getElementsByTagName("head")[0];
            r = o.createElement("script");
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, "https://static.hotjar.com/c/hotjar-",".js?sv=");
	</script>
	<script>
        const subscribeBar = document.querySelector('.subscribe__bar')
        const subscribe = document.querySelector('.subscribe')
        subscribeBar.addEventListener('click', function () {
            subscribe.scrollIntoView()
        })

        window.addEventListener('resize', toggleSubscribeBar)
        window.addEventListener('scroll', toggleSubscribeBar)
        toggleSubscribeBar()
        function toggleSubscribeBar() {
            const visible = isInViewport(subscribe)
            if (visible) {
                subscribeBar.style.display = 'none';
            } else {
                subscribeBar.style.display = 'flex';
            }
        }
        function isInViewport(el) {
            const position = el.getBoundingClientRect();
            return position.top < window.innerHeight && position.bottom >= 0;
        }

        $(document).ready(function() {
            const countdown = document.querySelector('.we-will-call-you__countdown')

            let seconds = defineTimeout();

            if (seconds) {
                $('.we-will-call-you__title').hide();
                $('.we-will-call-you__timer').show();
                resumeCountdown()
            }

            function resumeCountdown() {
                countdown.textContent = format(seconds--)
                if (seconds >= 0) {
                    setTimeout(resumeCountdown, 1000)
                } else {
                    $('.we-will-call-you__title').show();
                    $('.we-will-call-you__timer').hide();
                }
            }
        });

        function format(totalSeconds) {
            const hours = Math.floor(totalSeconds / 3600);
            const minutes = Math.floor((totalSeconds - hours * 3600) / 60);
            const seconds = totalSeconds % 60;
            return pad(hours) + ':' + pad(minutes) + ':' + pad(seconds)
        }
        function pad (x) {
            const s = String(x)
            return s.length > 1 ? s : '0' + s
        }

        function defineTimeout() {
            if (!window.smart_form_call_timings) {
                return
            }

            const settings = window.smart_form_call_timings[window.country_code]
            if (!settings) {
                return
            }

            const timeAtZone = moment().tz(settings.timezone)
            const currentHour = timeAtZone.hours()

            for (let i = 0; i < settings.intervals.length; ++i) {
                const interval = settings.intervals[i]
                if (interval.fromHour <= currentHour && currentHour < interval.toHour) {
                    return interval.timing
                }
            }
        }
	</script>
	<script>
        //x_resubmit_form - класс формы переотправки.
        //В форме должен быть инпут с id заказа с name="order_id" и инпут с новым телефоном c name="phone"

        const session_id = uuid();
        const form = $('form.x_resubmit_form');
        const subscribeForm = $('form.subscribe__input');
        let timeSpent = 0;
        setInterval(function () { timeSpent++; }, 1000);
        $.post('/submit-version.php', getVersionData('created'), () => { console.log('order created');});
        localStorage.setItem('phone', getVersionData('created').phone);

        form.submit(function (ev) {
            ev.preventDefault();
            const data = {};
            form.find("input").each(function () {
                var input = $(this);
                data[input.attr("name")] = input.val();
            });
            data.id = parseInt(data.id);
            if(localStorage.getItem('phone') === getVersionData().phone) {
                $.post('/submit-version.php', getVersionData('skipped:duplicate'), () => { console.log('duplicate');});
                return;
            }
            if(getVersionData().phone.length < 3) {
                $.post('/submit-version.php', getVersionData('skipped:invalid'), () => { console.log('invalid');});
                return;
            }
            $.post('/resubmit.php', data, () => {
                console.log('phone resubmited');
                document.cookie = 'client_name=' + data.name +';';
                document.cookie = 'client_phone=' + data.phone +';';
                localStorage.setItem('phone', data.phone);
            });
            $.post('/submit-version.php', getVersionData('updated'), () => { console.log('phone resubmited');});
        });


        $(window).on('unload', function() {
            const query = $.param(getVersionData('user:left'));
            navigator.sendBeacon(`/submit-version.php?${query}`);
        });
        subscribeForm.submit(function (ev) {
            ev.preventDefault();
            const data = {};
            subscribeForm.find("input").each(function () {
                var input = $(this);
                data[input.attr("name")] = input.val();
            });
            $.post(
                '/submit-version.php',
                getVersionData('user:subscribed', data),
                () => { console.log('subscribed'); }
            );
            $.post(
                '/mail-subscribe.php',
                data,
                () => { window.location.pathname = 'success.html'; }
            );
        });

        function getVersionData(status = '', additionalParams = {}) {
            const data = { timeSpent: timeSpent + ' seconds' };

            form.find("input").each(function () {
                var input = $(this);
                data[input.attr("name")] = input.val();
            });
            if (!data.phone) {
               data.phone =  $('.x_client_phone').text();
            }
            if (!data.name) {
                data.name = $('.x_client_name').text();
            }
            data.id = parseInt(data.id);

            return {
                status: status,
                session_id: session_id,
                landing_url: document.location.href,
                data: JSON.stringify(Object.assign({}, additionalParams, data)),
                phone: data.phone,
                order_id: data.id
            };
        }


        //метод ниже генератор рандомного ключа сессии
        function uuid() {
            // Public Domain/MIT
            var d = new Date().getTime(); //Timestamp

            var d2 = (performance && performance.now && performance.now() * 1000) || 0; //Time in microseconds since page-load or 0 if unsupported

            return "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(
                /[xy]/g,
                function (c) {
                    var r = Math.random() * 16; //random number between 0 and 16

                    if (d > 0) {
                        //Use timestamp until depleted
                        r = (d + r) % 16 | 0;
                        d = Math.floor(d / 16);
                    } else {
                        //Use microseconds since page-load if supported
                        r = (d2 + r) % 16 | 0;
                        d2 = Math.floor(d2 / 16);
                    }

                    return (c === "x" ? r : (r & 0x3) | 0x8).toString(16);
                }
            );
        }
</script>
</body>
</html>
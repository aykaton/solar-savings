<?php
/*
Template Name: home
Template Post Type: page
*/
?>

<!DOCTYPE html>
<html lang=<?php bloginfo('language') ?>>

<head>

	<?php wp_head()?>
	<title>Calculate My Solar Savings</title>
	<meta charset=<?php bloginfo('charset'); ?>>
	<meta name="format-detection" content="telephone=no">
	<!-- <style>body{opacity: 0;}</style> -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="page">
		<div class="page__content">
			<div class="page__content-background">
				<div class="background">
					<div class="background__wrapper">
						<div class="background__decorations">
							<div class="background__decorations-wrapper">
								<div class="decoration-slide" data-idx="1">
									<div class="decoration-slide__wrapper">
										<div class="decoration-slide__img-wrapper">
											<img src="<?php bloginfo('template_url'); ?>/assets/img/background-decor-01/01.svg" alt="decor 01" class="decoration-slide__img">
										</div>
										<div class="decoration-slide__img-wrapper">
											<img src="<?php bloginfo('template_url'); ?>/assets/img/background-decor-01/02.svg" alt="decor 02" class="decoration-slide__img">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="page__content-wrapper">
				<div class="page__header">
					<?php get_header(); ?>
				</div>
				<main class="page__main">
					<section class="guide">
						<div class="guide__container">
							<div class="guide__wrapper">
								<h1 class="guide__title main-title">
									See How Much You Can <span class="main-title_p2"> Save&nbsp;with&nbsp;Solar</span>&nbsp;!
								</h1>
								<div class="guide__header">
									<div class="progress-bar guide__progress-bar"></div>
								</div>
								<div class="guide__sections">
									<div class="guide__main-form">
										<div class="step-page">
											<div class="step-page__row">
												<div class="step-page__congratulations">
													<h2 class="step-page__congratulations-title main-title">
														<span class="main-title_p2">Your Report Is Ready!</span> See If You Qualify For Solar Incentives
													</h2>
													<h3 class="step-page__congratulations-subtitle">
														Please complete this last step to view your savings.
													</h3>
												</div>
											</div>
											<div class="step-page__row">
												<h3 class="step-page__question visible" data-step="avaragePowerBill">
													What’s your average monthly power bill?
												</h3>
												<h3 class="step-page__question" data-step="address">
													What’s your property address?
												</h3>
												<h3 class="step-page__question" data-step="homeType">
													What is your home type?
												</h3>
												<h3 class="step-page__question" data-step="roofShade">
													How much roof shade do you get?
												</h3>
												<h3 class="step-page__question" data-step="creditScore">
													What is your credit score?
												</h3>
												<h3 class="step-page__question" data-step="contact">
													Who is this savings report for?
												</h3>
												<h3 class="step-page__question" data-step="email">
													Where should we email your savings report?
												</h3>
											</div>
											<div class="step-page__row">
												<form name="quiz" class="base-form step-page__form">
													<div class="step-page__form-inner">
														<div class="step-page__prev-btn-place">
															<button class="step-page-btn step-page__prev-btn" data-type="prev">
																<span class="icon-back-arrow"></span>
																<span class="step-page-btn__caption">
																	Back
																</span>
															</button>
														</div>
														<div class="step-page__inputs-place" data-step="avaragePowerBill">
															<div class="range">
																<div class="range__value-container" id="power-bill-indicator">
																	<div class="range__value">$210</div>
																</div>
																<div class="range__input-container">
																	<input name="avarageBill" class="range__input" type="range" min="100" max="800" step="5" value="210" />
																</div>
																<div class="range__label-container">
																	<div class="range__label">$100</div>
																	<div class="range__label">$800</div>
																</div>
															</div>
														</div>
														<div class="step-page__inputs-place" data-step="address">
															<div class="base-form__address-field form-field">
																<div class="form-field__error">Error: address is incorrect</div>
																<input name="address" type="text" class="form-field__input" placeholder="Search (Enter your street Address)">
															</div>
														</div>
														<div class="step-page__inputs-place" data-step="homeType">
															<div class="base-form__row step-page__form-row">
																<div class="base-form__radio-field form-field form-field_radio">
																	<input id="homeType-singleFamily" name="homeType" type="radio" value="singleFamily" class="form-field__input form-field__input_radio">
																	<label for="homeType-singleFamily" class="form-field__radio-label">
																		Single Family Home
																	</label>
																</div>
																<div class="base-form__radio-field form-field form-field_radio">
																	<input id="homeType-apartment" name="homeType" type="radio" value="apartment" class="form-field__input form-field__input_radio">
																	<label for="homeType-apartment" class="form-field__radio-label">
																		Condo or Apartment
																	</label>
																</div>
																<div class="base-form__radio-field form-field form-field_radio">
																	<input id="homeType-mobile" name="homeType" type="radio" value="mobile" class="form-field__input form-field__input_radio">
																	<label for="homeType-mobile" class="form-field__radio-label">
																		Mobile Home
																	</label>
																</div>
															</div>
														</div>
														<div class="step-page__inputs-place" data-step="roofShade">
															<div class="base-form__row step-page__form-row">
																<div class="base-form__radio-field form-field form-field_radio">
																	<input id="roofShade-noShade" name="roofShade" type="radio" value="noShade" class="form-field__input form-field__input_radio">
																	<label for="roofShade-noShade" class="form-field__radio-label">
																		No Shade
																	</label>
																</div>
																<div class="base-form__radio-field form-field form-field_radio">
																	<input id="roofShade-someShade" name="roofShade" type="radio" value="someShade" class="form-field__input form-field__input_radio">
																	<label for="roofShade-someShade" class="form-field__radio-label">
																		Some Shade
																	</label>
																</div>
																<div class="base-form__radio-field form-field form-field_radio">
																	<input id="roofShade-severeShade" name="roofShade" type="radio" value="severeShade" class="form-field__input form-field__input_radio">
																	<label for="roofShade-severeShade" class="form-field__radio-label">
																		Severe Shade
																	</label>
																</div>
																<div class="base-form__radio-field form-field form-field_radio">
																	<input id="roofShade-uncertain" name="roofShade" type="radio" value="uncertain" class="form-field__input form-field__input_radio">
																	<label for="roofShade-uncertain" class="form-field__radio-label">
																		Uncertain
																	</label>
																</div>
															</div>
														</div>
														<div class="step-page__inputs-place" data-step="creditScore">
															<div class="base-form__row step-page__form-row">
																<div class="base-form__radio-field form-field form-field_radio">
																	<input id="creditScore-above600" name="creditScore" type="radio" value="above600" class="form-field__input form-field__input_radio">
																	<label for="creditScore-above600" class="form-field__radio-label">
																		Above 600
																	</label>
																</div>
																<div class="base-form__radio-field form-field form-field_radio">
																	<input id="creditScore-below600" name="creditScore" type="radio" value="below600" class="form-field__input form-field__input_radio">
																	<label for="creditScore-below600" class="form-field__radio-label">
																		Below 600
																	</label>
																</div>
																<div class="base-form__radio-field form-field form-field_radio">
																	<input id="creditScore-notSure" name="creditScore" type="radio" value="notSure" class="form-field__input form-field__input_radio">
																	<label for="creditScore-notSure" class="form-field__radio-label">
																		I’m not sure
																	</label>
																</div>
															</div>
														</div>
														<div class="step-page__inputs-place" data-step="contact">
															<div class="step-page__contact-form-section">
																<div class="contact-form-section">
																	<div class="contact-form-section__first-name-field form-field">
																		<div class="form-field__error"></div>
																		<input name="firstName" type="text" class="form-field__input" placeholder="Enter your first name">
																	</div>
																	<div class="contact-form-section__last-name-field form-field">
																		<div class="form-field__error"></div>
																		<input name="lastName" type="text" class="form-field__input" placeholder="Enter your last name">
																	</div>
																	<div class="contact-form-section__agreement-field form-field form-field_inline">
																		<div class="form-field__checkbox">
																			<input id="contact-isOwner" name="isOwner" type="checkbox" class="form-field__checkbox-input" checked>
																			<span class="form-field__checkbox-arrow icon-success-arrow"></span>
																		</div>
																		<label for="contact-isOwner" class="form-field__label">I am the owner and/or have authority with respect to this property.</label>
																	</div>
																</div>
															</div>
														</div>
														<div class="step-page__inputs-place" data-step="email">
															<div class="step-page__email-form-section">
																<div class="email-form-section">
																	<div class="email-form-section__email-field form-field">
																		<div class="form-field__error">Error: email is incorrect</div>
																		<input name="email" type="text" class="form-field__input" placeholder="Enter your email">
																	</div>
																</div>
																<div class="email-form-section__agreement-field form-field">
																	<div class="form-field__checkbox">
																		<input id="email-emailMe" name="emailMe" type="checkbox" class="form-field__checkbox-input" checked>
																		<span class="form-field__checkbox-arrow icon-success-arrow"></span>
																	</div>
																	<label for="email-emailMe" class="form-field__label">Email me a link to my report</label>
																</div>
															</div>
														</div>
														<div class="step-page__inputs-place" data-step="phoneNumber">
															<div class="step-page__phone-form-section">
																<div class="phone-form-section">
																	<div class="phone-form-section__email-field form-field">
																		<div class="form-field__error">Error: phone number is incorrect</div>
																		<input name="phoneNumber" type="tel" class="form-field__input" placeholder="Enter your phone number">
																	</div>
																</div>
															</div>
														</div>
														<div class="step-page__agreement" data-step="phoneNumber">
															By clicking the submit button, you hereby agree to the
															<a href="#" class="step-page__agreement-link">Privacy Policy</a> and
															<a href="#" class="step-page__agreement-link">Terms & Conditions</a>. You also hereby consent to receive marketing
															communications via automated telephone dialing system and/or pre-recorded calls, text messages, and/or emails from
															our <a href="#" class="step-page__agreement-link">Service Providers and Partners</a> at the phone number, physical
															address and email address provided above, even if you are on any State and/or Federal Do Not Call list.
															Consent is not a condition of purchase and may be revoked at any time. Message and data rates may apply.
															<a href="#" class="step-page__agreement-link">California Residents.</a>
														</div>
														<div class="step-page__next-btn-place">
															<button class="step-page-btn step-page__next-btn" data-type="next">
																<span class="step-page-btn__caption">
																	Next
																</span>
																<span class="icon-next-arrow"></span>
															</button>
														</div>
													</div>
												</form>
											</div>
											<div class="step-page__row">
												<div class="step-page__cards-container">
													<div class="step-page__cards-inner">
														<div class="step-page__card-container">
															<div class="agitation-card step-page__card" data-step="avaragePowerBill">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-money-bag"></span>
																		<h4 class="agitation-card__title">100% Confidential</h4>
																	</div>
																	<div class="agitation-card__text">
																		Your information will be kept private and only used to determine what you qualify for																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="address">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-money-bag"></span>
																		<h4 class="agitation-card__title">For Verification Only.</h4>
																	</div>
																	<div class="agitation-card__text">
																		We do not mail.
																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="homeType">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-money-bag"></span>
																		<h4 class="agitation-card__title">Reduce Your Power Bill</h4>
																	</div>
																	<div class="agitation-card__text">
																		Reduce your power bill and start saving day 1!
																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="roofShade">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-clock"></span>
																		<h4 class="agitation-card__title">Fast & Free</h4>
																	</div>
																	<div class="agitation-card__text">
																		We never charge for our service, and we never will. Keep going, you’re almost at the finish line!
																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="creditScore">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-ssl"></span>
																		<h4 class="agitation-card__title">Why we need this!</h4>
																	</div>
																	<div class="agitation-card__text">
																		Some of the programs require good credit.
																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="contact">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-ssl"></span>
																		<h4 class="agitation-card__title">SSL Encryption</h4>
																	</div>
																	<div class="agitation-card__text">
																		We use the latest security technology to ensure that your info is 100% safe. Our customers are our #1 priority - always.
																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="email">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-message"></span>
																		<h4 class="agitation-card__title">We take privacy seriously.</h4>
																	</div>
																	<div class="agitation-card__text">
																		No Spam whatsoever!
																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="phoneNumber">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-message"></span>
																		<h4 class="agitation-card__title">We take privacy seriously.</h4>
																	</div>
																	<div class="agitation-card__text">
																		No Spam whatsoever!
																	</div>
																</div>
															</div>
														</div>
														<div class="step-page__card-container">
															<div class="agitation-card step-page__card" data-step="avaragePowerBill">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-money-bag"></span>
																		<h4 class="agitation-card__title">Why We Need This</h4>
																	</div>
																	<div class="agitation-card__text">
																		Your current energy costs usage help us determine how much you can save by going solar.
																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="address">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-money-bag"></span>
																		<h4 class="agitation-card__title">Why We Need This</h4>
																	</div>
																	<div class="agitation-card__text">
																		We will use this information to find your home’s positioning to the sun.
																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="homeType">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-flying-money"></span>
																		<h4 class="agitation-card__title">Earn Money with Your System</h4>
																	</div>
																	<div class="agitation-card__text">
																		Run your meter backwards for credits with your utility!
																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="roofShade">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-cloud"></span>
																		<h4 class="agitation-card__title">This Is Important</h4>
																	</div>
																	<div class="agitation-card__text">
																		Trees shading a homeowner’s roof is common. But it’s best for the solar installer to know just how much shade we’re talking!
																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="creditScore">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-ssl"></span>
																		<h4 class="agitation-card__title">100% Confidential</h4>
																	</div>
																	<div class="agitation-card__text">
																		Your information will be kept private and only used to determine what you qualify for.
																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="contact">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-message"></span>
																		<h4 class="agitation-card__title">We Never Spam</h4>
																	</div>
																	<div class="agitation-card__text">
																		No email lists with Calculatemysolarsavings. We respect your privacy, and will only connect you to matching solar installers.
																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="email">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-ssl"></span>
																		<h4 class="agitation-card__title">100% Confidential</h4>
																	</div>
																	<div class="agitation-card__text">
																		Your information will be kept private and only used to determine what you qualify for.
																	</div>
																</div>
															</div>
															<div class="agitation-card step-page__card" data-step="phoneNumber">
																<div class="agitation-card__wrapper">
																	<div class="agitation-card__header">
																		<span class="agitation-card__icon icon-ssl"></span>
																		<h4 class="agitation-card__title">100% Confidential</h4>
																	</div>
																	<div class="agitation-card__text">
																		Your information will be kept private and only used to determine what you qualify for.
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="guide__booking-page">
										<section class="booking-step">
											<h2 class="booking-step__title main-title main-title_p2">
												Congrats {{firstName}}!
											</h2>
											<p class="booking-step__text" data-step="booking">
												You’ve been approved to get solar for no upfront cost.
											</p>
											<p class="booking-step__text" data-step="booking">
												Grab a spot on our calendar to see how much you can save with solar and what incentives you qualify for.
											</p>
											<p class="booking-step__text" data-step="booking">
												<span class="booking-step__text_p2">You’ll like our energy advisors, they’re friendly!</span> If they aren’t, let us know and we’ll punish them.
											</p>
											<iframe name="calendar" src="https://api.leadconnectorhq.com/widget/appointment/service/1?group=cmss-appointment-setters" style="width: 100%;border:none;overflow: hidden;" scrolling="no" id="0wGGwJvARPFfn6gGDepH_1668853534144"></iframe><br>
											<script src="https://api.leadconnectorhq.com/js/form_embed.js?_v=20221121203134" type="text/javascript"></script>
											<!-- <iframe src="https://api.leadconnectorhq.com/widget/appointment/service/english?group=powering-earth-discovery"
		style="width: 100%;border:none;overflow: hidden;"
		scrolling="no"
		id="LBJEzhPt12SIckulDweI_1668110383294">
	</iframe> -->
											<script src="https://api.leadconnectorhq.com/js/form_embed.js?_v=20221121203134" type="text/javascript">
											</script>
										</section>
									</div>
									<div class="guide__processing-page">
										<section class="processing-step">
											<h2 class="processing-step__title main-title" data-step="checkingRebates">
												Checking Local Rebates & Incentives
											</h2>
											<h2 class="processing-step__title main-title" data-step="processingForm">
												Sending your request to our managers
											</h2>
											<div class="processing-step__indicator">
												<div class="processing-indicator">
													<div class="processing-indicator__bar"></div>
													<div class="processing-indicator__text">Loading...</div>
												</div>
											</div>
										</section>
									</div>
									<div class="guide__summary-page">

									</div>
								</div>
								<script type="text/template" id="progress-bar-item">
									<div class="progress-bar__item progress-bar__item_hidden" data-idx={{idx}}>
					<div class="progress-bar__item-caption">{{caption}}</div>
					<div class="progress-bar__item-state">{{state}}</div>
				</div>
			</script>
							</div>
						</div>
					</section>
				</main>
			</div>
		</div>
		<div class="page__footer">
			<?php get_footer(); ?>
		</div>
	</div>
	<!-- <div id="popup" aria-hidden="true" class="popup">
	<div class="popup__wrapper">
		<div class="popup__content">
			<button data-close type="button" class="popup__close">Закрыть</button>
			<div class="popup__text">
				Text
			</div>
		</div>
	</div>
</div> -->
	<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzKgasm0eB7tXP-FMXZ-9iKNNU00Yl7Y0&libraries=places&language=en&callback=initGoogleApi&_v=20221121203134">
	</script>
</body>

</html>
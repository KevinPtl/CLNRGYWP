<?php the_content();?>
<div id="form-wrapper">
    <div role="progressbar" class="progress-bar">
        <div class="step">
            <span class="label">1</span>
        </div>
        <div class="step">
            <span class="label">2</span>
        </div>
        <div class="step">
            <span class="label">3</span>
        </div>
        <div class="step">
            <span class="label">4</span>
        </div>
        <div class="step">
            <span class="label">5</span>
        </div>
    </div>
    <form id="contact-form" method="POST">
        <div class="form-outer" id="form-wizard-container">
            <section class="stepper" id="step-one">
                <div class="input-container">
                    <label for="fullname">Nom complet *</label><br>
                    <input type="text" id="fullname" name="fullname">
                    <small></small>
                </div>
                <div class="input-container">
                    <label for="phone">Numéro de téléphone *</label><br>
                    <input type="tel" id="phone" name="phone">
                    <small></small>
                </div>
                <div class="input-container full-width">
                    <label for="email">Courriel *</label><br>
                    <input type="email" id="email" name="email">
                    <small></small>
                </div>
                <div class="button-container">
                    <button type="button" id="next" name="next" class="primary">Continue</button>
                </div>
            </section>
            <section class="stepper" id="step-two">
                <div class="input-container full-width">
                    <label for="goal">Quel est votre objectif ultime ? *</label><br>
                    <textarea id="goal" name="goal" rows="4" cols="70"></textarea>
                    <small></small>
                </div>
                <div class="input-container full-width">
                    <label for="goalTime">En combien de temps souhaitez-vous atteindre votre objectif ? *</label><br>
                    <textarea id="goalTime" name="goalTime" rows="4" cols="50"></textarea>
                    <small></small>
                </div>
                <div class="button-container">
                    <button type="button" id="previous1" name="previous1" class="secondary">Précédent</button>
                    <button type="button" id="next1" name="next1" class="primary">Continue</button>
                </div>
            </section>
            <section class="stepper" id="step-three">
                <div class="input-container full-width">
                    <label for="healthState">Dans quel état de santé êtes-vous en ce moment ? *</label><br>
                    <textarea id="healthState" name="healthState" rows="4" cols="50"></textarea>
                    <small></small>
                </div>
                <div class="button-container">
                    <button type="button" id="previous2" name="previous2" class="secondary">Précédent</button>
                    <button type="button" id="next2" name="next2" class="primary">Continue</button>
                </div>
            </section>
            <section class="stepper" id="step-four">
                <div class="input-container full-width">
                    <label for="motivation">Êtes-vous réellement motivé à fournir les efforts nécessaires pour atteindre vos objectifs ? *</label><br>
                    <textarea id="motivation" name="motivation" rows="4" cols="50"></textarea>
                    <small></small>
                </div>
                <div class="button-container">
                    <button type="button" id="previous3" name="previous3" class="secondary">Précédent</button>
                    <button type="button" id="next3" name="next3" class="primary">Continue</button>
                </div>
            </section>
            <section class="stepper" id="step-five">
                <div class="input-container full-width">
                    <label for="notes">Avez-vous des informations supplémentaires à ajouter à votre dossier ?</label><br>
                    <textarea id="notes" name="notes" rows="4" cols="70"></textarea>
                    <small></small>
                </div>
                <div class="button-container">
                    <button type="button" id="previous4" name="previous4" class="secondary">Précédent</button>
                    <button type="submit" id="submit" name="submit" class="primary">Envoyer<span class="icon--end"><i class="contact-spinner fa-regular fa-spinner-third fa-spin"></i></span></button>
                </div>
            </section>
        </div>
        <!-- <div class="input-container full-width">
            <div id="divRecaptcha"></div>
            <input type="hidden" id="recaptcha-token" name="recaptcha" value="" />
            <small></small>
        </div> -->
    </form>
</div>

<div id="message-sent">
    <h4>Votre formulaire a été envoyé</h4>
    <p>Nous vous remercions de remplir le formulaire! Nous apprécions votre intérêt en CLEANERGY et nous nous engageons à vous contacter dans les plus brefs délais pour discuter de vos plan d'entraînement, nutrition ou supplémentation personnalisé. Nous sommes impatients de vous aider à atteindre vos objectifs!</p>
</div>

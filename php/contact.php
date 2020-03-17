<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>News</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
        <!-- emmet: header>h1+p+nav>ul>li*3>a -->
        <header class="left left--contact">
            <h1 class="left__title"><a href="index.html" class="left__title-link">Students News</a></h1>
            <div class="left__paragraph">
                <h2 class="left__subtitle"><strong class="left__subtitle-strong">Say a word</strong> contact us</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh
                    quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum
                    mauris.
                </p>
            </div>
            <nav>
                <ul class="left__nav">
                    <li class="left__nav-item"><a href="" class="left__nav-link">Plan du site</a></li>
                    <li class="left__nav-item"><a href="" class="left__nav-link">Mentions légales</a></li>
                    <li class="left__nav-item"><a href="contact.html" class="left__nav-link">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main class="right">
            <header id="content-header">
                <h1>Contact</h1>
            </header>
            <section id="contact">
                <form id="form" action="">
                    <fieldset>
                        <legend>Identité</legend>
                        <div class="form-row">
                            <label>Je suis</label>
                            <div class="input-group">
                                <input type="radio" name="civilite" value="2">
                                <span>une femme /</span>
                                <input type="radio" name="civilite" value="1">
                                <span>un homme</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="prenom">Mon prénom est </label>
                            <input type="text" id="prenom" placeholder="Prenom">
                        </div>
                        <div class="form-row">
                            <label for="nom">Et mon nom, </label>
                            <input type="text" id="nom" placeholder="Nom">
                        </div>
                        <div class="form-row">
                            <label for="source">J'ai connu ce site grâce à </label>
                            <select id="source" name="source">
                                <option value="">choisir</option>
                                <option value="fb">Facebook</option>
                                <option value="twitter">Twitter</option>
                                <option value="google">Google</option>
                                <option value="bouche-a-oreilles">Bouche à oreilles</option>
                                <option value="jpp">JT de 13h de Jean-Pierre Pernault</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Message</legend>
                        <div class="form-row">
                            <label for="email">Répondez-moi via</label>
                            <input type="email" id="email" placeholder="Adresse e-mail">
                        </div>
                        <div class="form-row">
                            <label for="message">Je voulais vous dire que</label>
                            <textarea id="message" name="message" placeholder="Votre message"></textarea>
                        </div>
                        <div class="form-row">
                            <label for="file">Et vous montrer ça aussi</label>
                            <input type="file" id="file">
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-row">
                            <label for="info">Je certifie la véracité de ces informations.</label>
                            <input id="info" type="checkbox" name="info" value="1">
                            <input id="info" type="checkbox" name="info" value="4">
                        </div>
                    </fieldset>
                    <button id="submit-form" type="submit">Envoyer</button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
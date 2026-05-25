<style>
    .cookie-consent {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: var(--secondary-color);
        color: var(--contrast-color);
        text-align: center;
        padding: 20px 10px;
        display: none;
        z-index: 999;
        box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.3);
    }

    .cookie-consent p {
        color: var(--contrast-color);
        margin-bottom: 15px;
        font-size: 14px;
        line-height: 1.6;
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
    }

    .accept-cookies {
        background: var(--accent-color);
        border: 2px solid var(--accent-color);
        color: var(--contrast-color);
        font-weight: 600;
        border-radius: 50px;
        padding: 12px 40px;
        cursor: pointer;
        transition: 0.3s;
        font-size: 14px;
    }

    .accept-cookies:hover {
        background: transparent;
        border-color: var(--contrast-color);
        color: var(--contrast-color);
    }

    .cookie-consent .links-container {
        width: 100%;
        margin-top: 15px;
    }

    .cookie-consent ul {
        margin: 0 auto;
        display: inline-block;
        padding: 0;
        list-style: none;
    }

    .cookie-consent ul li {
        display: inline-block;
        margin: 0 15px;
    }

    .cookie-consent ul li a {
        text-decoration: underline;
        color: var(--contrast-color);
        text-transform: uppercase;
        font-size: 11px;
        font-weight: 500;
        transition: 0.3s;
        letter-spacing: 0.5px;
    }

    .cookie-consent ul li a:hover {
        text-decoration: none;
        color: var(--accent-color);
    }

    @media (max-width: 768px) {
        .cookie-consent {
            padding: 15px 10px;
        }

        .cookie-consent p {
            font-size: 13px;
        }

        .cookie-consent ul li {
            margin: 5px 10px;
        }

        .accept-cookies {
            padding: 10px 30px;
            font-size: 13px;
        }
    }
</style>

<!-- Cookie Consent Pop-up -->
<div id="cookie-consent" class="cookie-consent">
    <div class="container">
        <p><?= $words['cookieConsentText']; ?></p>
        <button id="accept-cookies" class="accept-cookies"><?= $words['acceptCookies']; ?></button>

        <div class="links-container">
            <ul>
                <li>
                    <a href="./datenschutz"><?= $words['dataProtection']; ?></a>
                </li>
                <li>
                    <a href="./impressum"><?= $words['imprint']; ?></a>
                </li>
                <li>
                    <a href="./AGB"><?= $words['gtc']; ?></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    // Cookie Consent Logic
    document.addEventListener('DOMContentLoaded', function() {
        // Check if user has already accepted cookies
        if (!localStorage.getItem('cookiesAccepted')) {
            document.getElementById('cookie-consent').style.display = 'block';
        }

        // Handle accept button click
        document.getElementById('accept-cookies').addEventListener('click', function() {
            localStorage.setItem('cookiesAccepted', 'true');
            document.getElementById('cookie-consent').style.display = 'none';
        });
    });
</script>
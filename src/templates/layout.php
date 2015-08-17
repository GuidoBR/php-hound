<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Hound Results</title>
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.indigo-deep_purple.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-color--primary">
        <div class="mdl-layout__header-row">
          <?php if (!empty($backButton)) : ?>
          <div class="demo-back">
            <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="index.html" title="go back" role="button">
              <i class="material-icons" role="presentation">arrow_back</i>
            </a>
          </div>
          <?php endif; ?>
          <span class="mdl-layout-title">PHP Hound</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <?= $content ?>
        <footer class="mdl-mega-footer">
          <div class="mdl-mega-footer--bottom-section">
            <div class="mdl-logo">
              Generated by <a href="https://github.com/alanwillms/php-hound"><?=
                $this->e($phpHoundVersion)
                ?></a>
              using <a href="http://php.net/"><?=
                $this->e($phpVersion)
                ?></a>
              at <?= $this->e($generationTime) ?>.
            </div>
          </div>
        </footer>
      </main>
    </div>
  </body>
</html>
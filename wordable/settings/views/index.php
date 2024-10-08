<article class="wordable-body" style="display: none">
  <header id="nav" class="wordable-nav">
    <img src="<?php echo $this->asset_url('/settings/images/logo-unsigned.svg') ?>" loading="lazy" width="118" class="wordable-plugin-nav-img" />
    <a href="mailto:support@wordable.io?subject=WordPress Plugin Help" class="w-help-and-support">Help &amp; Support</a>
  </header>
  <div class="wordable-body-contents">
    <?php if($this->is_connected()) { ?>
      <div class="columns-3 w-row">
        <div class="w-col w-col-12">
          <h1 class="wordable-destination-title"> Wordable to WordPress </h1>
        </div>
        <div class="w-col w-col-6">
          <?php echo $this->render('onboarding') ?>
          <?php echo $this->render('authors') ?>
        </div>
        <div class="w-col w-col-6">
          <div class="div-block-4">
            <h2>Articles</h2>
            <a class="article-link" href="<?php echo esc_html($this->article_url('/en/articles/5974419-transformations-how-to-automate-those-recurring-tedious-individual-optimization-tasks')) ?>" target="blank">
              Getting Started
            </a>
            <a class="article-link" href="<?php echo esc_html($this->article_url('/en/collections/3339296-connections')) ?>" target="blank">
              Connections
            </a>
            <a class="article-link" href="<?php echo esc_html($this->article_url('/en/collections/3386485-faq')) ?>" target="blank">
              FAQ
            </a>

            <a class="article-link" href="<?php echo esc_html($this->article_url('/en/articles/5974419-transformations-how-to-automate-those-recurring-tedious-individual-optimization-tasks')) ?>" target="blank">
              How to automate those recurring, tedious individual optimization tasks
            </a>

            <a class="article-link" href="<?php echo esc_html($this->article_url('/en/articles/6051414-wordable-vs-copying-pasting-google-docs-straight-to-wordpress')) ?>" target="blank">
              Wordable vs. copying & pasting Google Docs straight to WordPress
            </a>
          </div>
          <?php echo $this->render('categories') ?>
        </div>
      </div>
    <?php } else { $this->render('cta'); } ?>
  </div>
</article>

<footer id="wordable-footer" style="display: none">
  <div class="text-block-7">
    © 2024 Wordable <span class="text-span"> v<?php echo WORDABLE_VERSION ?> </span> Secret: <?php echo $this->secret() ?>
    &middot;
    <?php echo $this->render('system_report') ?>
    <br />Remember to keep this secret safe as it can be used to send requests to your website.
  </div>
</footer>

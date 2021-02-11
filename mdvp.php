<?php 
session_start();

if(!$_SESSION['nomMembre'])
{
  header('location: index.php');
}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<html lang="fr">

<head>


  <title>AV · Validation du projet</title>

  <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

  <?php include 'head.html'; ?>
</head>
<body class="logged-out env-production page-responsive min-width-0">

  <?php include 'api/navbar.php'; ?>

  <br>
  <br>
  <br>




  <div role="main">


   <div itemscope itemtype="http://schema.org/SoftwareSourceCode">
    <div id="js-repo-pjax-container" data-pjax-container>







      <div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav">
        <div class="container repohead-details-container">



          <h1 class="public ">
            <svg aria-hidden="true" class="octicon octicon-repo" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
            <span class="author" itemprop="author"><a href="eoa.php" class="url fn" rel="aulthor">Orientation de l'action</a></span>

          </h1>

        </div>
        <div class="container">



        </div>
      </div>

      <div class="container new-discussion-timeline experiment-repo-nav">
        <div class="repository-content">


          <div class="signup-prompt-bg rounded-1">
            <div class="signup-prompt p-4 text-center mb-4 rounded-1">
              <div class="position-relative">

              </form>
              <h3 class="pt-2">Validation du projet</h3>
              <p class="col-6 mx-auto">Rédiger les enjeux et les objectifs du projet</p>
              <p class="pb-2">

              </p>
            </div>
          </div>
        </div>


      </div>

    </div>
  </div>



  <div>
    <div class="container-lg p-responsive">
      <div class="container repohead-details-container">

        <ul class="pagehead-actions">
          <li>
            <a href="https://github.com/login?return_to=%2Fhandsontable%2Fangular-handsontable"
            class="btn btn-sm btn-with-count tooltipped tooltipped-n"
            aria-label="You must be signed in to watch a repository" rel="nofollow">
            <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>
            Editer
          </a>


        </li>

        <li>
          <a href="https://github.com/login?return_to=%2Fhandsontable%2Fangular-handsontable"
          class="btn btn-sm btn-with-count tooltipped tooltipped-n"
          aria-label="You must be signed in to star a repository" rel="nofollow">
          <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74z"/></svg>
          Imprimer
        </a>



      </li>

      <li>
        <a href="https://github.com/login?return_to=%2Fhandsontable%2Fangular-handsontable"
        class="btn btn-sm btn-with-count tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <svg aria-hidden="true" class="octicon octicon-repo-forked" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path fill-rule="evenodd" d="M8 1a1.993 1.993 0 0 0-1 3.72V6L5 8 3 6V4.72A1.993 1.993 0 0 0 2 1a1.993 1.993 0 0 0-1 3.72V6.5l3 3v1.78A1.993 1.993 0 0 0 5 15a1.993 1.993 0 0 0 1-3.72V9.5l3-3V4.72A1.993 1.993 0 0 0 8 1zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3 10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3-10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
        Exporter  
      </a>


    </li>
  </ul>



</div>

<ul class="table-list table-list-bordered table-list-milestones js-navigation-container js-active-navigation-container">


  <div class="table-list-item milestone notdue">
    <div class="table-list-cell milestone-title">
      <h4 class="pt-1">Origine</h4> 
      <div class="milestone-meta">
        <span class="milestone-meta-item">
          Quel fait générateur ou déclencheur est à l'origine du projet?
        </span>

      </div>



      <div class="milestone-meta">
        <span class="milestone-meta-item">


          <textarea rows="6" cols="140" name="editor1"></textarea>
          <script>
            CKEDITOR.replace( 'editor1' );
          </script> 

        </span>

      </div>


    </div>
  </div>

  <div class="table-list-item milestone notdue">
    <div class="table-list-cell milestone-title">
      <h4 class="pt-1">Enjeu</h4> 
      <div class="milestone-meta">
        <span class="milestone-meta-item">
          Quels sont les enjeux du projet pour l'entreprise? - Stratégique  - Economique - Technique - Organisationnel
        </span>

      </div>



      <div class="milestone-meta">
        <span class="milestone-meta-item">


         <textarea rows="6" cols="140" name="editor2"></textarea>
         <script>
          CKEDITOR.replace( 'editor2' );
        </script> 
      </span>

    </div>


  </div>
</div>

<div class="table-list-item milestone notdue">
  <div class="table-list-cell milestone-title">
    <h4 class="pt-1">Objectif</h4> 
    <div class="milestone-meta">
      <span class="milestone-meta-item">
        Quels sont les objectifs du projet? - Technique - Economique - En délai
      </span>

    </div>

    <div class="milestone-meta">
      <span class="milestone-meta-item">


        <textarea rows="6" cols="140" name="editor3"></textarea>
        <script>
          CKEDITOR.replace( 'editor3' );
        </script>                  </span>

      </div>
      <br>


    </div>
  </div>


</ul>




<div class="d-md-flex mt-md-1">









</div>
</div>

</div>
</div>

<div class="modal-backdrop js-touch-events"></div>

</div>

<div class="footer container-lg p-responsive mt-6" role="contentinfo">
  <div class="d-flex flex-wrap py-5 mb-5">
    <div class="col-12 col-md-2 mb-3">
      <svg aria-hidden="true" class="octicon octicon-logo-github" height="24" version="1.1" viewBox="0 0 45 16" width="67"><path fill-rule="evenodd" d="M18.53 12.03h-.02c.009 0 .015.01.024.011h.006l-.01-.01zm.004.011c-.093.001-.327.05-.574.05-.78 0-1.05-.36-1.05-.83V8.13h1.59c.09 0 .16-.08.16-.19v-1.7c0-.09-.08-.17-.16-.17h-1.59V3.96c0-.08-.05-.13-.14-.13h-2.16c-.09 0-.14.05-.14.13v2.17s-1.09.27-1.16.28c-.08.02-.13.09-.13.17v1.36c0 .11.08.19.17.19h1.11v3.28c0 2.44 1.7 2.69 2.86 2.69.53 0 1.17-.17 1.27-.22.06-.02.09-.09.09-.16v-1.5a.177.177 0 0 0-.146-.18zm23.696-2.2c0-1.81-.73-2.05-1.5-1.97-.6.04-1.08.34-1.08.34v3.52s.49.34 1.22.36c1.03.03 1.36-.34 1.36-2.25zm2.43-.16c0 3.43-1.11 4.41-3.05 4.41-1.64 0-2.52-.83-2.52-.83s-.04.46-.09.52c-.03.06-.08.08-.14.08h-1.48c-.1 0-.19-.08-.19-.17l.02-11.11c0-.09.08-.17.17-.17h2.13c.09 0 .17.08.17.17v3.77s.82-.53 2.02-.53l-.01-.02c1.2 0 2.97.45 2.97 3.88zm-8.72-3.61H33.84c-.11 0-.17.08-.17.19v5.44s-.55.39-1.3.39-.97-.34-.97-1.09V6.25c0-.09-.08-.17-.17-.17h-2.14c-.09 0-.17.08-.17.17v5.11c0 2.2 1.23 2.75 2.92 2.75 1.39 0 2.52-.77 2.52-.77s.05.39.08.45c.02.05.09.09.16.09h1.34c.11 0 .17-.08.17-.17l.02-7.47c0-.09-.08-.17-.19-.17zm-23.7-.01h-2.13c-.09 0-.17.09-.17.2v7.34c0 .2.13.27.3.27h1.92c.2 0 .25-.09.25-.27V6.23c0-.09-.08-.17-.17-.17zm-1.05-3.38c-.77 0-1.38.61-1.38 1.38 0 .77.61 1.38 1.38 1.38.75 0 1.36-.61 1.36-1.38 0-.77-.61-1.38-1.36-1.38zm16.49-.25h-2.11c-.09 0-.17.08-.17.17v4.09h-3.31V2.6c0-.09-.08-.17-.17-.17h-2.13c-.09 0-.17.08-.17.17v11.11c0 .09.09.17.17.17h2.13c.09 0 .17-.08.17-.17V8.96h3.31l-.02 4.75c0 .09.08.17.17.17h2.13c.09 0 .17-.08.17-.17V2.6c0-.09-.08-.17-.17-.17zM8.81 7.35v5.74c0 .04-.01.11-.06.13 0 0-1.25.89-3.31.89-2.49 0-5.44-.78-5.44-5.92S2.58 1.99 5.1 2c2.18 0 3.06.49 3.2.58.04.05.06.09.06.14L7.94 4.5c0 .09-.09.2-.2.17-.36-.11-.9-.33-2.17-.33-1.47 0-3.05.42-3.05 3.73s1.5 3.7 2.58 3.7c.92 0 1.25-.11 1.25-.11v-2.3H4.88c-.11 0-.19-.08-.19-.17V7.35c0-.09.08-.17.19-.17h3.74c.11 0 .19.08.19.17z"/></svg>
      <p class="text-gray alt-text-small">
        &copy; 2017
      </p>
    </div>
    <div class="col-6 col-sm-4 col-md-2 mb-3 pr-3">
      <h4 class="mb-2">Features</h4>
      <ul class="list-style-none text-gray">
        <li class="lh-condensed mb-2"><a href="features.html#code-review" class="muted-link alt-text-small">Code review</a></li>
        <li class="lh-condensed mb-2"><a href="features.html#project-management" class="muted-link alt-text-small">Project management</a></li>
        <li class="lh-condensed mb-2"><a href="features.html#community-management" class="muted-link alt-text-small">Community</a></li>
        <li class="lh-condensed mb-2"><a href="features.html#documentation" class="muted-link alt-text-small no-wrap">Documentation</a></li>
        <li class="lh-condensed mb-2"><a href="features.html#code-hosting" class="muted-link alt-text-small">Code hosting</a></li>
      </ul>
    </div>
    <div class="col-6 col-sm-4 col-md-2 mb-3 pr-3">
      <h4 class="mb-2">Platform</h4>
      <ul class="list-style-none">
        <li class="lh-condensed mb-2"><a href="https://atom.io/" class="muted-link alt-text-small">Atom</a></li>
        <li class="lh-condensed mb-2"><a href="http://electron.atom.io/" class="muted-link alt-text-small">Electron</a></li>
        <li class="lh-condensed mb-2"><a href="https://desktop.github.com/" class="muted-link alt-text-small">GitHub Desktop</a></li>
        <li class="lh-condensed mb-2"><a href="https://developer.github.com/" data-ga-click="Footer, go to api, text:api" class="muted-link alt-text-small">Developers</a></li>
      </ul>
    </div>
    <div class="col-6 col-sm-4 col-md-2 mb-3 pr-3">
      <h4 class="mb-2">Community</h4>
      <ul class="list-style-none">
        <li class="lh-condensed mb-2"><a href="personal.html" class="muted-link alt-text-small">Personal</a></li>
        <li class="lh-condensed mb-2"><a href="open-source.html" class="muted-link alt-text-small">Open source</a></li>
        <li class="lh-condensed mb-2"><a href="business.html" class="muted-link alt-text-small">For Business</a></li>
        <li class="lh-condensed mb-2"><a href="https://education.github.com/" class="muted-link alt-text-small">For Education</a></li>
        <li class="lh-condensed mb-2"><a href="https://community.github.com/" class="muted-link alt-text-small">Sponsorships</a></li>
      </ul>
    </div>
    <div class="col-6 col-sm-4 col-md-2 mb-3 pr-3">
      <h4 class="mb-2">Company</h4>
      <ul class="list-style-none">
        <li class="lh-condensed mb-2"><a href="about.html" class="muted-link alt-text-small" data-ga-click="Footer, go to about, text:about">About</a></li>
        <li class="lh-condensed mb-2"><a href="blog.html" class="muted-link alt-text-small" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li class="lh-condensed mb-2"><a href="business/customers.html" class="muted-link alt-text-small">Customers</a></li>
        <li class="lh-condensed mb-2"><a href="about/careers.html" class="muted-link alt-text-small">Careers</a></li>
        <li class="lh-condensed mb-2"><a href="about/press.html" class="muted-link alt-text-small">Press</a></li>
        <li class="lh-condensed mb-2"><a href="https://shop.github.com/" class="muted-link alt-text-small">Shop</a></li>
      </ul>
    </div>
    <div class="col-6 col-sm-4 col-md-2 mb-3 pr-3">
      <h4 class="mb-2">Resources</h4>
      <ul class="list-style-none">
        <li class="lh-condensed mb-2"><a href="contact.html" class="muted-link alt-text-small" data-ga-click="Footer, go to contact, text:contact">Contact GitHub</a></li>
        <li class="lh-condensed mb-2"><a href="https://help.github.com/" class="muted-link alt-text-small" data-ga-click="Footer, go to help, text:help">Help</a></li>
        <li class="lh-condensed mb-2"><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status" class="muted-link alt-text-small">Status</a></li>
        <li class="lh-condensed mb-2"><a href="https://help.github.com/articles/github-terms-of-service/" class="muted-link alt-text-small" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li class="lh-condensed mb-2"><a href="https://help.github.com/articles/github-privacy-statement/" class="muted-link alt-text-small" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li class="lh-condensed mb-2"><a href="https://help.github.com/articles/github-security/" class="muted-link alt-text-small" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li class="lh-condensed mb-2"><a href="https://services.github.com/" class="muted-link alt-text-small">Training</a></li>
      </ul>
    </div>
  </div>
</div>




<div id="ajax-error-message" class="ajax-error-message flash flash-error">
  <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg>
  <button type="button" class="flash-close js-flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
    <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
  </button>
  You can't perform that action at this time.
</div>


<script crossorigin="anonymous" src="../assets-cdn.github.com/assets/compat-91f98c37fc84eac24836eec2567e9912742094369a04c4eba6e3cd1fa18902d9.js"></script>
<script crossorigin="anonymous" src="../assets-cdn.github.com/assets/frameworks-143a6f74056707f6b14875ec6ca4f2eb16f5d0781f7e1cb82bd441b4438b43d3.js"></script>

<script async="async" crossorigin="anonymous" src="../assets-cdn.github.com/assets/github-a3db37c169c8510815dedb0e9bbfda110628b0b4a4fb9652b95642f8e0b0fff2.js"></script>




<div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner d-none">
  <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg>
  <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="#">Reload</a> to refresh your session.</span>
  <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="#">Reload</a> to refresh your session.</span>
</div>
<div class="facebox" id="facebox" style="display:none;">
  <div class="facebox-popup">
    <div class="facebox-content" role="dialog" aria-labelledby="facebox-header" aria-describedby="facebox-description">
    </div>
    <button type="button" class="facebox-close js-facebox-close" aria-label="Close modal">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
    </button>
  </div>
</div>


</body>

<!-- Mirrored from github.com/marketplace by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Sep 2017 20:49:19 GMT -->
</html>


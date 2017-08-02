<?php
    include 'html_header.php';
?>


  <div class="position-relative js-header-wrapper ">
    <a href="#start-of-content" tabindex="1" class="bg-black text-white p-3 show-on-focus js-skip-to-content">Skip to content</a>
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress"></div></div>

    
    
    



        
<div class="header" role="banner">
  <div class="container-lg px-3 clearfix">
    <div class="d-flex flex-justify-between">
      <div class="d-flex">
        <a class="header-logo-invertocat" href="https://github.com/" data-hotkey="g d" aria-label="Homepage" data-ga-click="Header, go to dashboard, icon:logo">
  <svg aria-hidden="true" class="octicon octicon-mark-github" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>
</a>


            

          <ul class="d-flex list-style-none" role="navigation">
            <li>
              <a href="/pulls" aria-label="Pull requests you created" class="js-selected-navigation-item header-navlink" data-ga-click="Header, click, Nav menu - item:pulls context:user" data-hotkey="g p" data-selected-links="/pulls /pulls/assigned /pulls/mentioned /pulls">
                Pull requests
</a>            </li>
            <li>
              <a href="/issues" aria-label="Issues you created" class="js-selected-navigation-item header-navlink" data-ga-click="Header, click, Nav menu - item:issues context:user" data-hotkey="g i" data-selected-links="/issues /issues/assigned /issues/mentioned /issues">
                Issues
</a>            </li>
                <li>
                  <a href="/marketplace" class="js-selected-navigation-item header-navlink" data-ga-click="Header, click, Nav menu - item:marketplace context:user" data-selected-links=" /marketplace">
                    Marketplace
</a>                </li>
              <li>
                <a class="header-navlink" href="https://gist.github.com/" data-ga-click="Header, go to gist, text:gist">Gist</a>
              </li>
          </ul>
      </div>

      <div class="d-flex">
        
<ul class="d-flex user-nav list-style-none" id="user-links">
  <li>
    
    <a href="/notifications" aria-label="You have unread notifications" class="header-navlink notification-indicator tooltipped tooltipped-s js-socket-channel js-notification-indicator " data-channel="notification-changed:8722712" data-ga-click="Header, go to notifications, icon:unread" data-hotkey="g n">
        <span class="mail-status unread"></span>
        <svg aria-hidden="true" class="octicon octicon-bell" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 12v1H0v-1l.73-.58c.77-.77.81-2.55 1.19-4.42C2.69 3.23 6 2 6 2c0-.55.45-1 1-1s1 .45 1 1c0 0 3.39 1.23 4.16 5 .38 1.88.42 3.66 1.19 4.42l.66.58H14zm-7 4c1.11 0 2-.89 2-2H5c0 1.11.89 2 2 2z"/></svg>
</a>
  </li>

  <li class="dropdown js-menu-container">
    <a class="header-navlink tooltipped tooltipped-s js-menu-target" href="/new"
       aria-label="Create new…"
       aria-expanded="false"
       aria-haspopup="true"
       data-ga-click="Header, create new, icon:add">
      <svg aria-hidden="true" class="octicon octicon-plus float-left" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 9H7v5H5V9H0V7h5V2h2v5h5z"/></svg>
      <span class="dropdown-caret"></span>
    </a>

    <div class="dropdown-menu-content js-menu-content">
      <ul class="dropdown-menu dropdown-menu-sw">
        
<a class="dropdown-item" href="/new" data-ga-click="Header, create new repository">
  New repository
</a>

  <a class="dropdown-item" href="/new/import" data-ga-click="Header, import a repository">
    Import repository
  </a>

<a class="dropdown-item" href="https://gist.github.com/" data-ga-click="Header, create new gist">
  New gist
</a>

  <a class="dropdown-item" href="/organizations/new" data-ga-click="Header, create new organization">
    New organization
  </a>



  <div class="dropdown-divider"></div>
  <div class="dropdown-header">
    <span title="cruisereizen/cruisereizen">This repository</span>
  </div>
    <a class="dropdown-item" href="/cruisereizen/cruisereizen/issues/new" data-ga-click="Header, create new issue">
      New issue
    </a>

      </ul>
    </div>
  </li>

  <li class="dropdown js-menu-container">
    <a class="header-navlink name tooltipped tooltipped-sw js-menu-target" href="/HACKPLUSPLUS"
       aria-label="View profile and more"
       aria-expanded="false"
       aria-haspopup="true"
       data-ga-click="Header, show menu, icon:avatar">
      <img alt="@HACKPLUSPLUS" class="avatar" src="https://avatars2.githubusercontent.com/u/8722712?v=4&amp;s=40" height="20" width="20">
      <span class="dropdown-caret"></span>
    </a>

    <div class="dropdown-menu-content js-menu-content">
      <div class="dropdown-menu dropdown-menu-sw">
        <div class="dropdown-header header-nav-current-user css-truncate">
          Signed in as <strong class="css-truncate-target">HACKPLUSPLUS</strong>
        </div>

        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="/HACKPLUSPLUS" data-ga-click="Header, go to profile, text:your profile">
          Your profile
        </a>
        <a class="dropdown-item" href="/HACKPLUSPLUS?tab=stars" data-ga-click="Header, go to starred repos, text:your stars">
          Your stars
        </a>
        <a class="dropdown-item" href="/explore" data-ga-click="Header, go to explore, text:explore">
          Explore
        </a>
        <a class="dropdown-item" href="https://help.github.com" data-ga-click="Header, go to help, text:help">
          Help
        </a>

        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="/settings/profile" data-ga-click="Header, go to settings, icon:settings">
          Settings
        </a>

        <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/logout" class="logout-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="QP1eiBt+AUH++7M3neUZTzjUEEu9Zs3hWr5Qw6qIVNdmwqEIREt8CFqbm3CeInzCUmr9v2nz69wU84elUt3t0Q==" /></div>
          <button type="submit" class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
            Sign out
          </button>
</form>      </div>
    </div>
  </li>
</ul>


        <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/logout" class="sr-only right-0" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="Il/dZ9nS2ECXcTBhICrt1LFf+PaWV2tSgVWcYAozAMgEYCLnhuelCTMRGCYj7YhZ2+EVAkLCTW/PGEsG8ma5zg==" /></div>
          <button type="submit" class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
            Sign out
          </button>
</form>      </div>
    </div>
  </div>
</div>


      

  </div>

  <div id="start-of-content" class="show-on-focus"></div>

    <div id="js-flash-container">
</div>



  <div role="main">
        <div itemscope itemtype="http://schema.org/SoftwareSourceCode">
    <div id="js-repo-pjax-container" data-pjax-container>
      

<!-- base sha1: &quot;a0744d1e3dd71c013d45803be3a538484442397a&quot; -->
<!-- head sha1: &quot;719a3e2530213071eec9d579332af8fa1dcb4b6f&quot; -->



  


    <div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav">
      <div class="container repohead-details-container">

        <ul class="pagehead-actions">
  <li>
        <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="8rCvpUG+D83gKBUpJOQFyor0rNnwCFQHiCifYfzG0oVeJ55bHToXS2YPWsG7nPPSE+/QFUjyPOQnsCgpTdHmYQ==" /></div>      <input class="form-control" id="repository_id" name="repository_id" type="hidden" value="73371264" />

        <div class="select-menu js-menu-container js-select-menu">
          <a href="/cruisereizen/cruisereizen/subscription"
            class="btn btn-sm btn-with-count select-menu-button js-menu-target"
            role="button"
            aria-haspopup="true"
            aria-expanded="false"
            aria-label="Toggle repository notifications menu"
            data-ga-click="Repository, click Watch settings, action:pull_requests#show">
            <span class="js-select-button">
                <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>
                Unwatch
            </span>
          </a>
            <a class="social-count js-social-count"
              href="/cruisereizen/cruisereizen/watchers"
              aria-label="4 users are watching this repository">
              4
            </a>

        <div class="select-menu-modal-holder">
          <div class="select-menu-modal subscription-menu-modal js-menu-content">
            <div class="select-menu-header js-navigation-enable" tabindex="-1">
              <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
              <span class="select-menu-title">Notifications</span>
            </div>

              <div class="select-menu-list js-navigation-container" role="menu">

                <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
                  <div class="select-menu-item-text">
                    <input id="do_included" name="do" type="radio" value="included" />
                    <span class="select-menu-item-heading">Not watching</span>
                    <span class="description">Be notified when participating or @mentioned.</span>
                    <span class="js-select-button-text hidden-select-button-text">
                      <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>
                      Watch
                    </span>
                  </div>
                </div>

                <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
                  <div class="select-menu-item-text">
                    <input checked="checked" id="do_subscribed" name="do" type="radio" value="subscribed" />
                    <span class="select-menu-item-heading">Watching</span>
                    <span class="description">Be notified of all conversations.</span>
                    <span class="js-select-button-text hidden-select-button-text">
                      <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>
                        Unwatch
                    </span>
                  </div>
                </div>

                <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
                  <div class="select-menu-item-text">
                    <input id="do_ignore" name="do" type="radio" value="ignore" />
                    <span class="select-menu-item-heading">Ignoring</span>
                    <span class="description">Never be notified.</span>
                    <span class="js-select-button-text hidden-select-button-text">
                      <svg aria-hidden="true" class="octicon octicon-mute" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8 2.81v10.38c0 .67-.81 1-1.28.53L3 10H1c-.55 0-1-.45-1-1V7c0-.55.45-1 1-1h2l3.72-3.72C7.19 1.81 8 2.14 8 2.81zm7.53 3.22l-1.06-1.06-1.97 1.97-1.97-1.97-1.06 1.06L11.44 8 9.47 9.97l1.06 1.06 1.97-1.97 1.97 1.97 1.06-1.06L13.56 8l1.97-1.97z"/></svg>
                        Stop ignoring
                    </span>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
</form>
  </li>

  <li>
    
  <div class="js-toggler-container js-social-container starring-container ">
    <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/unstar" class="starred" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="nZNMtLTEuqwYUpkThwngOw7Ew5xyD4fSSQ2uj0kiFBuoxPGA/lR2MEZRjR5BklWnuYf4dxv+fBbhAWgatCE7Pw==" /></div>
      <button
        type="submit"
        class="btn btn-sm btn-with-count js-toggler-target"
        aria-label="Unstar this repository" title="Unstar cruisereizen/cruisereizen"
        data-ga-click="Repository, click unstar button, action:pull_requests#show; text:Unstar">
        <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74z"/></svg>
        Unstar
      </button>
        <a class="social-count js-social-count" href="/cruisereizen/cruisereizen/stargazers"
           aria-label="1 user starred this repository">
          1
        </a>
</form>
    <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/star" class="unstarred" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="Ds2R9BRiX/RiBUeW9JDuHfXzHDHz0fQJX0xiAJbo7b3/NWEs+rEFs0dwA8KzWhAZk/9e6/wT/3URevXKvmBEMA==" /></div>
      <button
        type="submit"
        class="btn btn-sm btn-with-count js-toggler-target"
        aria-label="Star this repository" title="Star cruisereizen/cruisereizen"
        data-ga-click="Repository, click star button, action:pull_requests#show; text:Star">
        <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74z"/></svg>
        Star
      </button>
        <a class="social-count js-social-count" href="/cruisereizen/cruisereizen/stargazers"
           aria-label="1 user starred this repository">
          1
        </a>
</form>  </div>

  </li>

  <li>
          <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/fork" class="btn-with-count" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="DjrZoyhSWkqTllub+o9TRP/8Pxjd9Hhe2y0/PfoyRwwrrGF2+E2HtsG4JSe+jI/SJde1hUCMbGF+uxaGJwsPCw==" /></div>
            <button
                type="submit"
                class="btn btn-sm btn-with-count"
                data-ga-click="Repository, show fork modal, action:pull_requests#show; text:Fork"
                title="Fork your own copy of cruisereizen/cruisereizen to your account"
                aria-label="Fork your own copy of cruisereizen/cruisereizen to your account">
              <svg aria-hidden="true" class="octicon octicon-repo-forked" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path fill-rule="evenodd" d="M8 1a1.993 1.993 0 0 0-1 3.72V6L5 8 3 6V4.72A1.993 1.993 0 0 0 2 1a1.993 1.993 0 0 0-1 3.72V6.5l3 3v1.78A1.993 1.993 0 0 0 5 15a1.993 1.993 0 0 0 1-3.72V9.5l3-3V4.72A1.993 1.993 0 0 0 8 1zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3 10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3-10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
              Fork
            </button>
</form>
    <a href="/cruisereizen/cruisereizen/network" class="social-count"
       aria-label="0 users forked this repository">
      0
    </a>
  </li>
</ul>

        <h1 class="private ">
  <svg aria-hidden="true" class="octicon octicon-lock" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M4 13H3v-1h1v1zm8-6v7c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V7c0-.55.45-1 1-1h1V4c0-2.2 1.8-4 4-4s4 1.8 4 4v2h1c.55 0 1 .45 1 1zM3.8 6h4.41V4c0-1.22-.98-2.2-2.2-2.2-1.22 0-2.2.98-2.2 2.2v2H3.8zM11 7H2v7h9V7zM4 8H3v1h1V8zm0 2H3v1h1v-1z"/></svg>
  <span class="author" itemprop="author"><a href="/cruisereizen" class="url fn" rel="author">cruisereizen</a></span><!--
--><span class="path-divider">/</span><!--
--><strong itemprop="name"><a href="/cruisereizen/cruisereizen" data-pjax="#js-repo-pjax-container">cruisereizen</a></strong>
    <span class="Label Label--outline v-align-middle">Private</span>

</h1>

      </div>
      <div class="container">
        
<nav class="reponav js-repo-nav js-sidenav-container-pjax"
     itemscope
     itemtype="http://schema.org/BreadcrumbList"
     role="navigation"
     data-pjax="#js-repo-pjax-container">

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a href="/cruisereizen/cruisereizen" class="js-selected-navigation-item reponav-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /cruisereizen/cruisereizen" itemprop="url">
      <svg aria-hidden="true" class="octicon octicon-code" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"/></svg>
      <span itemprop="name">Code</span>
      <meta itemprop="position" content="1">
</a>  </span>

    <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a href="/cruisereizen/cruisereizen/issues" class="js-selected-navigation-item reponav-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /cruisereizen/cruisereizen/issues" itemprop="url">
        <svg aria-hidden="true" class="octicon octicon-issue-opened" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"/></svg>
        <span itemprop="name">Issues</span>
        <span class="Counter">37</span>
        <meta itemprop="position" content="2">
</a>    </span>

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a href="/cruisereizen/cruisereizen/pulls" class="js-selected-navigation-item selected reponav-item" data-hotkey="g p" data-selected-links="repo_pulls /cruisereizen/cruisereizen/pulls" itemprop="url">
      <svg aria-hidden="true" class="octicon octicon-git-pull-request" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M11 11.28V5c-.03-.78-.34-1.47-.94-2.06C9.46 2.35 8.78 2.03 8 2H7V0L4 3l3 3V4h1c.27.02.48.11.69.31.21.2.3.42.31.69v6.28A1.993 1.993 0 0 0 10 15a1.993 1.993 0 0 0 1-3.72zm-1 2.92c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zM4 3c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v6.56A1.993 1.993 0 0 0 2 15a1.993 1.993 0 0 0 1-3.72V4.72c.59-.34 1-.98 1-1.72zm-.8 10c0 .66-.55 1.2-1.2 1.2-.65 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
      <span itemprop="name">Pull requests</span>
      <span class="Counter">0</span>
      <meta itemprop="position" content="3">
</a>  </span>

    <a href="/cruisereizen/cruisereizen/projects" class="js-selected-navigation-item reponav-item" data-selected-links="repo_projects new_repo_project repo_project /cruisereizen/cruisereizen/projects">
      <svg aria-hidden="true" class="octicon octicon-project" height="16" version="1.1" viewBox="0 0 15 16" width="15"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"/></svg>
      Projects
      <span class="Counter" >0</span>
</a>

      <a href="/cruisereizen/cruisereizen/settings" class="js-selected-navigation-item reponav-item" data-selected-links="repo_settings repo_branch_settings hooks integration_installations /cruisereizen/cruisereizen/settings">
        <svg aria-hidden="true" class="octicon octicon-gear" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg>
        Settings
</a>
    <div class="reponav-dropdown js-menu-container">
      <button type="button" class="btn-link reponav-item reponav-dropdown js-menu-target " data-no-toggle aria-expanded="false" aria-haspopup="true">
        Insights
        <svg aria-hidden="true" class="octicon octicon-triangle-down v-align-middle text-gray" height="11" version="1.1" viewBox="0 0 12 16" width="8"><path fill-rule="evenodd" d="M0 5l6 6 6-6z"/></svg>
      </button>
      <div class="dropdown-menu-content js-menu-content">
        <div class="dropdown-menu dropdown-menu-sw">
          <a class="dropdown-item" href="/cruisereizen/cruisereizen/pulse" data-skip-pjax>
            <svg aria-hidden="true" class="octicon octicon-pulse" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M11.5 8L8.8 5.4 6.6 8.5 5.5 1.6 2.38 8H0v2h3.6l.9-1.8.9 5.4L9 8.5l1.6 1.5H14V8z"/></svg>
            Pulse
          </a>
          <a class="dropdown-item" href="/cruisereizen/cruisereizen/graphs" data-skip-pjax>
            <svg aria-hidden="true" class="octicon octicon-graph" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M16 14v1H0V0h1v14h15zM5 13H3V8h2v5zm4 0H7V3h2v10zm4 0h-2V6h2v7z"/></svg>
            Graphs
          </a>
        </div>
      </div>
    </div>
</nav>

      </div>
    </div>

<div class="container new-discussion-timeline experiment-repo-nav">
  <div class="repository-content">

    
  <div class="issues-listing" data-pjax>
    
  


  <div class="clearfix js-issues-results">
    
  <div
    id="partial-discussion-header"
    class="gh-header js-details-container Details js-socket-channel js-updatable-content pull request"
    data-channel="pull_request:131053699"
    data-url="/cruisereizen/cruisereizen/pull/979/show_partial?partial=pull_requests%2Ftitle">

  <div class="gh-header-show ">
      <div class="gh-header-actions">
          <button type="button" class="btn btn-sm js-details-target" aria-expanded="false" aria-label="Edit Pull Request title">Edit</button>

      </div>

    <h1 class="gh-header-title">
      <span class="js-issue-title">
        Feature/lazyload
      </span>
      <span class="gh-header-number">#979</span>
    </h1>
  </div>

    <div class="gh-header-edit">
      <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/issues/979" class="js-issue-update js-comment" data-remote="true" data-type="json" id="edit_header_243670920" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="put" /><input name="authenticity_token" type="hidden" value="9avSFh/MAjf1WtaU8fwD6oMa+QsHpBl/JGMKYb23ez8hYcJj4ptq9K/6FUlHbvRc3rKDqt8kh+VK4a+GILiRHQ==" /></div>
        <input aria-label="Pull Request title" autocomplete="off" autofocus="autofocus" class="form-control edit-issue-title" id="issue_title" name="issue[title]" size="30" tabindex="1" type="text" value="Feature/lazyload" />
        <button class="btn" type="submit" data-disable-with="Updating" tabindex="1">Save</button>
        <button class="btn-link js-details-target" type="button" aria-expanded="true">Cancel</button>
</form>    </div>

  <div class="TableObject gh-header-meta">
    <div class="TableObject-item">
        <div class="State State--purple">
          <svg aria-hidden="true" class="octicon octicon-git-merge" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M10 7c-.73 0-1.38.41-1.73 1.02V8C7.22 7.98 6 7.64 5.14 6.98c-.75-.58-1.5-1.61-1.89-2.44A1.993 1.993 0 0 0 2 .99C.89.99 0 1.89 0 3a2 2 0 0 0 1 1.72v6.56c-.59.35-1 .99-1 1.72 0 1.11.89 2 2 2a1.993 1.993 0 0 0 1-3.72V7.67c.67.7 1.44 1.27 2.3 1.69.86.42 2.03.63 2.97.64v-.02c.36.61 1 1.02 1.73 1.02 1.11 0 2-.89 2-2 0-1.11-.89-2-2-2zm-6.8 6c0 .66-.55 1.2-1.2 1.2-.65 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm8 6c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
          Merged
        </div>
    </div>
    <div class="TableObject-item TableObject-item--primary">
          <a href="/jariketting" class="author pull-header-username css-truncate css-truncate-target expandable">
    jariketting
  </a>
  merged 15 commits into



  <span class="commit-ref css-truncate user-select-contain expandable " title="cruisereizen/cruisereizen:develop"><span class="css-truncate-target">develop</span></span>

from

<span class="commit-ref css-truncate user-select-contain expandable head-ref" title="cruisereizen/cruisereizen:feature/lazyload"><span class="css-truncate-target">feature/lazyload</span></span>


  <relative-time datetime="2017-07-18T10:31:49Z">Jul 18, 2017</relative-time>

    </div>
  </div>
</div>


      <include-fragment src="/cruisereizen/cruisereizen/pull/979/show_partial?partial=pull_requests%2Ftabs">
    
<div class="tabnav tabnav-pr">

  <nav class="tabnav-tabs">
    <a href="/cruisereizen/cruisereizen/pull/979" class="tabnav-tab selected js-pjax-history-navigate">
      <svg aria-hidden="true" class="octicon octicon-comment-discussion" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M15 1H6c-.55 0-1 .45-1 1v2H1c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h1v3l3-3h4c.55 0 1-.45 1-1V9h1l3 3V9h1c.55 0 1-.45 1-1V2c0-.55-.45-1-1-1zM9 11H4.5L3 12.5V11H1V5h4v3c0 .55.45 1 1 1h3v2zm6-3h-2v1.5L11.5 8H6V2h9v6z"/></svg>
      Conversation

      <span id="conversation_tab_counter" class="Counter">
        0
      </span>
    </a>

    <a href="/cruisereizen/cruisereizen/pull/979/commits" class="tabnav-tab  js-pjax-history-navigate">
      <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
      Commits

      <span id="commits_tab_counter" class="Counter">
        15
      </span>
    </a>

      <link rel="pjax-prefetch" href="/cruisereizen/cruisereizen/pull/979/files">
    <a href="/cruisereizen/cruisereizen/pull/979/files" class="tabnav-tab  js-pjax-history-navigate">
      <svg aria-hidden="true" class="octicon octicon-diff" height="16" version="1.1" viewBox="0 0 13 16" width="13"><path fill-rule="evenodd" d="M6 7h2v1H6v2H5V8H3V7h2V5h1v2zm-3 6h5v-1H3v1zM7.5 2L11 5.5V15c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1h6.5zM10 6L7 3H1v12h9V6zM8.5 0H3v1h5l4 4v8h1V4.5L8.5 0z"/></svg>
      Files changed

    </a>
  </nav>
</div>

  </include-fragment>


    <h2 class="sr-only">Conversation</h2>
    <div id="discussion_bucket" class="clearfix pull-request-tab-content is-visible">
      <div class="discussion-sidebar">
  <div id="partial-discussion-sidebar"
  class="js-socket-channel js-updatable-content"
  data-channel="pull_request:131053699"
  data-url="/cruisereizen/cruisereizen/issues/979/show_partial?partial=issues%2Fsidebar">

    <div class="discussion-sidebar-item sidebar-assignee js-discussion-sidebar-item position-relative">
  <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/pull/979/review-requests?pr_global_id=MDExOlB1bGxSZXF1ZXN0MTMxMDUzNjk5" class="js-issue-sidebar-form" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="BYEipmYRRf59GF1q77j/VoWySvtwtOwk9P6LDPFO4+6OVQ+1F340JuC0fz5UjVnWsbP1blpVlzzHhLZAVrD1bQ==" /></div>
    

  <div class="select-menu js-menu-container js-select-menu js-load-contents js-review-requests-menu"
       data-contents-url="/cruisereizen/cruisereizen/pull/979/review-requests"
       data-multiple data-max-options=15>

    <button type="button"
            class="discussion-sidebar-heading discussion-sidebar-toggle js-menu-target"
            aria-label="Request a review" aria-haspopup="true" aria-expanded="false"
            data-hotkey="q">
      <svg aria-hidden="true" class="octicon octicon-gear" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg>
      Reviewers
    </button>

    <div class="select-menu-modal-holder js-menu-content js-navigation-container">
      <div class="select-menu-modal">
        <div class="select-menu-header">
          <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
          <span class="select-menu-title">Request a review</span>
        </div>

          
  
<div class="select-menu-filters">
  <div class="select-menu-text-filter">
    <input type="text" id="review-filter-field" class="form-control js-filterable-field js-navigation-enable"
           placeholder="Filter people" aria-label="Type or choose a name" spellcheck="false" autocomplete="off">
  </div>
</div>

<div class="js-max-warning warning d-none">
  You can only select 15 reviewers.
</div>

<div class="select-menu-list">
  <div class="select-menu-no-results">Nothing to show</div>

  <div data-filterable-for="review-filter-field" data-filterable-type="substring-memory" data-filterable-limit="100" role="menu">

    <template>
      <div class="select-menu-item js-navigation-item" role="menuitem">
        <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>

        <input style="display:none"
               type="checkbox"
               value=""
               name="reviewer_user_ids[]">

        <div class="select-menu-item-gravatar">
          <img src="" alt="" size="20" class="avatar avatar-small mr-1 js-avatar">
        </div>

        <div class="select-menu-item-text lh-condensed">
          <span class="select-menu-item-heading">
            <span class="js-username"></span>
            <span class="description js-description"></span>
            <span class="description d-block ml-4 pl-1 pr-2 js-extended-description"></span>
          </span>
        </div>
      </div>
    </template>

    <div class="select-menu-divider d-none js-divider-suggestions">Suggestions</div>
    <div class="select-menu-divider d-none js-divider-rest">Everyone else</div>
  </div>
</div>


          <div class="select-menu-loading-overlay anim-pulse">
            <svg aria-hidden="true" class="octicon octicon-octoface" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M14.7 5.34c.13-.32.55-1.59-.13-3.31 0 0-1.05-.33-3.44 1.3-1-.28-2.07-.32-3.13-.32s-2.13.04-3.13.32c-2.39-1.64-3.44-1.3-3.44-1.3-.68 1.72-.26 2.99-.13 3.31C.49 6.21 0 7.33 0 8.69 0 13.84 3.33 15 7.98 15S16 13.84 16 8.69c0-1.36-.49-2.48-1.3-3.35zM8 14.02c-3.3 0-5.98-.15-5.98-3.35 0-.76.38-1.48 1.02-2.07 1.07-.98 2.9-.46 4.96-.46 2.07 0 3.88-.52 4.96.46.65.59 1.02 1.3 1.02 2.07 0 3.19-2.68 3.35-5.98 3.35zM5.49 9.01c-.66 0-1.2.8-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.54-1.78-1.2-1.78zm5.02 0c-.66 0-1.2.79-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.53-1.78-1.2-1.78z"/></svg>
          </div>
      </div>
    </div>
  </div>

    <span class="css-truncate">
      No reviews—<button type="button" class="btn-link muted-link js-review-menu-target" aria-label="Reviews">request one</button>
</span>

</form></div>

  <div class="discussion-sidebar-item sidebar-assignee js-discussion-sidebar-item">
  <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/issues/979?partial=issues%2Fsidebar%2Fshow%2Fassignees" class="js-issue-sidebar-form" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="put" /><input name="authenticity_token" type="hidden" value="Kz92R3EbRXshQTPqhV8OLU56ScrpbxWWZpDaHFGDa6f/9WYyjEwtuHvh8DczzfmbE9IzazHviwwIEn/7zIyBhQ==" /></div>
    

  <div class="select-menu js-menu-container js-select-menu js-load-contents "
       data-contents-url="/cruisereizen/cruisereizen/issues/979/show_partial?partial=issues%2Fsidebar%2Fassignees_menu_content"
       data-multiple data-max-options=10>

    <button type="button"
            class="discussion-sidebar-heading discussion-sidebar-toggle js-menu-target"
            aria-label="Assign up to 10 people to this issue" aria-haspopup="true" aria-expanded="false"
            data-hotkey="a">
      <svg aria-hidden="true" class="octicon octicon-gear" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg>
      Assignees
    </button>

    <div class="select-menu-modal-holder js-menu-content js-navigation-container">
      <div class="select-menu-modal">
        <div class="select-menu-header">
          <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
          <span class="select-menu-title">Assign up to 10 people to this issue</span>
        </div>

          
  
<div class="select-menu-filters">
  <div class="select-menu-text-filter">
    <input type="text" id="assignee-filter-field" class="form-control js-filterable-field js-navigation-enable"
           placeholder="Filter people" aria-label="Type or choose a name" spellcheck="false" autocomplete="off">
  </div>
</div>

<div class="js-max-warning warning d-none">
  You can only select 10 assignees.
</div>

<div class="select-menu-list">
    <button class="btn-block select-menu-clear-item select-menu-item js-navigation-item"
         type="button" aria-label="Clear assignee" data-clear-assignees>
      <svg aria-hidden="true" class="octicon octicon-x select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
      <div class="select-menu-item-text">Clear assignees</div>
    </button>

  <div class="select-menu-no-results">Nothing to show</div>

  <input type="hidden" value="" name="issue[user_assignee_ids][]">

  <div data-filterable-for="assignee-filter-field" data-filterable-type="substring-memory" data-filterable-limit="100" role="menu">
      <input type="hidden" name="issue[user_assignee_ids][]" value="15982332">

    <template>
      <div class="select-menu-item js-navigation-item" role="menuitem">
        <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>

        <input style="display:none"
               type="checkbox"
               value=""
               name="issue[user_assignee_ids][]">

        <div class="select-menu-item-gravatar">
          <img src="" alt="" size="20" class="avatar avatar-small mr-1 js-avatar">
        </div>

        <div class="select-menu-item-text lh-condensed">
          <span class="select-menu-item-heading">
            <span class="js-username"></span>
            <span class="description js-description"></span>
          </span>
        </div>
      </div>
    </template>
  </div>
</div>


          <div class="select-menu-loading-overlay anim-pulse">
            <svg aria-hidden="true" class="octicon octicon-octoface" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M14.7 5.34c.13-.32.55-1.59-.13-3.31 0 0-1.05-.33-3.44 1.3-1-.28-2.07-.32-3.13-.32s-2.13.04-3.13.32c-2.39-1.64-3.44-1.3-3.44-1.3-.68 1.72-.26 2.99-.13 3.31C.49 6.21 0 7.33 0 8.69 0 13.84 3.33 15 7.98 15S16 13.84 16 8.69c0-1.36-.49-2.48-1.3-3.35zM8 14.02c-3.3 0-5.98-.15-5.98-3.35 0-.76.38-1.48 1.02-2.07 1.07-.98 2.9-.46 4.96-.46 2.07 0 3.88-.52 4.96.46.65.59 1.02 1.3 1.02 2.07 0 3.19-2.68 3.35-5.98 3.35zM5.49 9.01c-.66 0-1.2.8-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.54-1.78-1.2-1.78zm5.02 0c-.66 0-1.2.79-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.53-1.78-1.2-1.78z"/></svg>
          </div>
      </div>
    </div>
  </div>

    <span class="css-truncate">
      <p>
        <img alt="@jariketting" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/15982332?v=4&amp;s=40" width="20" />
        <a href="/cruisereizen/cruisereizen/pulls/assigned/jariketting" class="assignee css-truncate-target">jariketting</a>
      </p>
</span>

</form></div>

  <div class="discussion-sidebar-item sidebar-labels js-discussion-sidebar-item">
  <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/issues/979?partial=issues%2Fsidebar%2Fshow%2Flabels" class="js-issue-sidebar-form" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="put" /><input name="authenticity_token" type="hidden" value="UDGSnNTdTJ3hVWVWTpa9LPNEdYssi+b+YXQNxFrwloeE+4LpKYokXrv1pov4BEqaruwPKvQLeGQP9qgjx/98pQ==" /></div>
      

  <div class="select-menu js-menu-container js-select-menu js-load-contents label-select-menu"
       data-contents-url="/cruisereizen/cruisereizen/issues/979/show_partial?partial=issues%2Fsidebar%2Flabels_menu_content"
       data-multiple>

    <button type="button"
            class="discussion-sidebar-heading discussion-sidebar-toggle js-menu-target"
            aria-label="Apply labels to this issue" aria-haspopup="true" aria-expanded="false"
            data-hotkey="l">
      <svg aria-hidden="true" class="octicon octicon-gear" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg>
      Labels
    </button>

    <div class="select-menu-modal-holder js-menu-content js-navigation-container">
      <div class="select-menu-modal">
        <div class="select-menu-header">
          <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
          <span class="select-menu-title">Apply labels to this issue</span>
        </div>

          <div class="js-select-menu-deferred-content"></div>
          <div class="select-menu-loading-overlay anim-pulse">
            <svg aria-hidden="true" class="octicon octicon-octoface" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M14.7 5.34c.13-.32.55-1.59-.13-3.31 0 0-1.05-.33-3.44 1.3-1-.28-2.07-.32-3.13-.32s-2.13.04-3.13.32c-2.39-1.64-3.44-1.3-3.44-1.3-.68 1.72-.26 2.99-.13 3.31C.49 6.21 0 7.33 0 8.69 0 13.84 3.33 15 7.98 15S16 13.84 16 8.69c0-1.36-.49-2.48-1.3-3.35zM8 14.02c-3.3 0-5.98-.15-5.98-3.35 0-.76.38-1.48 1.02-2.07 1.07-.98 2.9-.46 4.96-.46 2.07 0 3.88-.52 4.96.46.65.59 1.02 1.3 1.02 2.07 0 3.19-2.68 3.35-5.98 3.35zM5.49 9.01c-.66 0-1.2.8-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.54-1.78-1.2-1.78zm5.02 0c-.66 0-1.2.79-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.53-1.78-1.2-1.78z"/></svg>
          </div>
      </div>
    </div>
  </div>

    <div class="labels css-truncate">
      <a href="/cruisereizen/cruisereizen/labels/enhancement" class="label css-truncate-target linked-labelstyle-84b6eb" title="enhancement">enhancement</a>
  <a href="/cruisereizen/cruisereizen/labels/Frontend" class="label css-truncate-target linked-labelstyle-128A0C" title="Frontend">Frontend</a>

</div>

</form></div>

    <div class="discussion-sidebar-item js-discussion-sidebar-item">
  <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/projects/issues/979" class="js-issue-sidebar-form" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="put" /><input name="authenticity_token" type="hidden" value="NA02INlFPPzrc6EMFvxpII1BvrshUsKXB60xypewwVyx3hSh/dzsmoyz9Vz7OLSUOitez+6YVG5JFpiEL7Zmwg==" /></div>
    

  <div class="select-menu js-menu-container js-select-menu js-load-contents "
       data-contents-url="/cruisereizen/cruisereizen/issues/979/show_partial?partial=issues%2Fsidebar%2Fprojects_menu_content"
       data-multiple>

    <button type="button"
            class="discussion-sidebar-heading discussion-sidebar-toggle js-menu-target"
            aria-label="Projects" aria-haspopup="true" aria-expanded="false"
            data-hotkey="p">
      <svg aria-hidden="true" class="octicon octicon-gear" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg>
      Projects
    </button>

    <div class="select-menu-modal-holder js-menu-content js-navigation-container">
      <div class="select-menu-modal">
        <div class="select-menu-header">
          <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
          <span class="select-menu-title">Projects</span>
        </div>

          <div class="js-select-menu-deferred-content"></div>
          <div class="select-menu-loading-overlay anim-pulse">
            <svg aria-hidden="true" class="octicon octicon-octoface" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M14.7 5.34c.13-.32.55-1.59-.13-3.31 0 0-1.05-.33-3.44 1.3-1-.28-2.07-.32-3.13-.32s-2.13.04-3.13.32c-2.39-1.64-3.44-1.3-3.44-1.3-.68 1.72-.26 2.99-.13 3.31C.49 6.21 0 7.33 0 8.69 0 13.84 3.33 15 7.98 15S16 13.84 16 8.69c0-1.36-.49-2.48-1.3-3.35zM8 14.02c-3.3 0-5.98-.15-5.98-3.35 0-.76.38-1.48 1.02-2.07 1.07-.98 2.9-.46 4.96-.46 2.07 0 3.88-.52 4.96.46.65.59 1.02 1.3 1.02 2.07 0 3.19-2.68 3.35-5.98 3.35zM5.49 9.01c-.66 0-1.2.8-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.54-1.78-1.2-1.78zm5.02 0c-.66 0-1.2.79-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.53-1.78-1.2-1.78z"/></svg>
          </div>
      </div>
    </div>
  </div>

    <span class="css-truncate">
    None yet
</span>

</form></div>

  <div class="discussion-sidebar-item sidebar-milestone js-discussion-sidebar-item">
  <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/issues/979/set_milestone?partial=issues%2Fsidebar%2Fshow%2Fmilestone" class="js-issue-sidebar-form" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="put" /><input name="authenticity_token" type="hidden" value="Chg+MnZKnNwTA1eZ6u1Fnta28777Ymfk6Ia+wgeYczXuDaOhHgQwwcb8bS7mb+6C88Srd9DGf+oVr+M6v3RnCw==" /></div>
    

  <div class="select-menu js-menu-container js-select-menu js-load-contents "
       data-contents-url="/cruisereizen/cruisereizen/issues/979/show_partial?partial=issues%2Fsidebar%2Fmilestone_menu_content"
       >

    <button type="button"
            class="discussion-sidebar-heading discussion-sidebar-toggle js-menu-target"
            aria-label="Set milestone" aria-haspopup="true" aria-expanded="false"
            data-hotkey="m">
      <svg aria-hidden="true" class="octicon octicon-gear" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg>
      Milestone
    </button>

    <div class="select-menu-modal-holder js-menu-content js-navigation-container">
      <div class="select-menu-modal">
        <div class="select-menu-header">
          <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
          <span class="select-menu-title">Set milestone</span>
        </div>

          <div class="js-select-menu-deferred-content"></div>
          <div class="select-menu-loading-overlay anim-pulse">
            <svg aria-hidden="true" class="octicon octicon-octoface" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M14.7 5.34c.13-.32.55-1.59-.13-3.31 0 0-1.05-.33-3.44 1.3-1-.28-2.07-.32-3.13-.32s-2.13.04-3.13.32c-2.39-1.64-3.44-1.3-3.44-1.3-.68 1.72-.26 2.99-.13 3.31C.49 6.21 0 7.33 0 8.69 0 13.84 3.33 15 7.98 15S16 13.84 16 8.69c0-1.36-.49-2.48-1.3-3.35zM8 14.02c-3.3 0-5.98-.15-5.98-3.35 0-.76.38-1.48 1.02-2.07 1.07-.98 2.9-.46 4.96-.46 2.07 0 3.88-.52 4.96.46.65.59 1.02 1.3 1.02 2.07 0 3.19-2.68 3.35-5.98 3.35zM5.49 9.01c-.66 0-1.2.8-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.54-1.78-1.2-1.78zm5.02 0c-.66 0-1.2.79-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.53-1.78-1.2-1.78z"/></svg>
          </div>
      </div>
    </div>
  </div>

      No milestone

</form></div>

    <div class="discussion-sidebar-item sidebar-notifications">
    <div class="discussion-sidebar-heading text-bold">Notifications</div>
    <div class="thread-subscription-status js-thread-subscription-status js-socket-channel js-updatable-content"
  data-channel="thread-subscription:243670920:8722712"
  data-url="/notifications/thread_subscription?repository_id=73371264&amp;thread_class=Issue&amp;thread_id=243670920">

  <svg aria-hidden="true" class="octicon octicon-radio-tower" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M4.79 6.11c.25-.25.25-.67 0-.92-.32-.33-.48-.76-.48-1.19 0-.43.16-.86.48-1.19.25-.26.25-.67 0-.92a.613.613 0 0 0-.45-.19c-.16 0-.33.06-.45.19-.57.58-.85 1.35-.85 2.11 0 .76.29 1.53.85 2.11.25.25.66.25.9 0zM2.33.52a.651.651 0 0 0-.92 0C.48 1.48.01 2.74.01 3.99c0 1.26.47 2.52 1.4 3.48.25.26.66.26.91 0s.25-.68 0-.94c-.68-.7-1.02-1.62-1.02-2.54 0-.92.34-1.84 1.02-2.54a.66.66 0 0 0 .01-.93zm5.69 5.1A1.62 1.62 0 1 0 6.4 4c-.01.89.72 1.62 1.62 1.62zM14.59.53a.628.628 0 0 0-.91 0c-.25.26-.25.68 0 .94.68.7 1.02 1.62 1.02 2.54 0 .92-.34 1.83-1.02 2.54-.25.26-.25.68 0 .94a.651.651 0 0 0 .92 0c.93-.96 1.4-2.22 1.4-3.48A5.048 5.048 0 0 0 14.59.53zM8.02 6.92c-.41 0-.83-.1-1.2-.3l-3.15 8.37h1.49l.86-1h4l.84 1h1.49L9.21 6.62c-.38.2-.78.3-1.19.3zm-.01.48L9.02 11h-2l.99-3.6zm-1.99 5.59l1-1h2l1 1h-4zm5.19-11.1c-.25.25-.25.67 0 .92.32.33.48.76.48 1.19 0 .43-.16.86-.48 1.19-.25.26-.25.67 0 .92a.63.63 0 0 0 .9 0c.57-.58.85-1.35.85-2.11 0-.76-.28-1.53-.85-2.11a.634.634 0 0 0-.9 0z"/></svg>

  <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/notifications/thread" class="thread-subscribe-form" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="uCYDpknmFzS3tG8g4C0p3HL1nRpXuBjBz44dg5ce3KtAp9+y8ErqgazjEfWMX+aRYig9WuKM9nCUKt9Wa44SHw==" /></div>    <input type="hidden" name="repository_id" value="73371264">
    <input type="hidden" name="thread_id" value="243670920">
    <input type="hidden" name="thread_class" value="Issue">
    <input type="hidden" name="id" value="mute">

    <button class="btn btn-sm" type="submit" data-disable-with>
      <svg aria-hidden="true" class="octicon octicon-mute" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8 2.81v10.38c0 .67-.81 1-1.28.53L3 10H1c-.55 0-1-.45-1-1V7c0-.55.45-1 1-1h2l3.72-3.72C7.19 1.81 8 2.14 8 2.81zm7.53 3.22l-1.06-1.06-1.97 1.97-1.97-1.97-1.06 1.06L11.44 8 9.47 9.97l1.06 1.06 1.97-1.97 1.97 1.97 1.06-1.06L13.56 8l1.97-1.97z"/></svg>
      Unsubscribe
    </button>
</form>
  <p class="reason text-small text-gray">You’re receiving notifications because you’re subscribed to this repository.</p>
</div>

  </div>

  <div id="partial-users-participants" class="discussion-sidebar-item">
  <div class="participation">

    <div class="discussion-sidebar-heading text-bold">
      1 participant
    </div>
    <div class="participation-avatars">
        <a class="participant-avatar tooltipped tooltipped-n" aria-label="jariketting" href="/jariketting"><img alt="@jariketting" class="avatar" height="26" src="https://avatars0.githubusercontent.com/u/15982332?v=4&amp;s=52" width="26" /> </a>
    </div>
  </div>
</div>


  
  <div class="discussion-sidebar-item lock-toggle">
    <a href="#lock-confirmation" rel="facebox" class="lock-toggle-link">
        <svg aria-hidden="true" class="octicon octicon-lock" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M4 13H3v-1h1v1zm8-6v7c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V7c0-.55.45-1 1-1h1V4c0-2.2 1.8-4 4-4s4 1.8 4 4v2h1c.55 0 1 .45 1 1zM3.8 6h4.41V4c0-1.22-.98-2.2-2.2-2.2-1.22 0-2.2.98-2.2 2.2v2H3.8zM11 7H2v7h9V7zM4 8H3v1h1V8zm0 2H3v1h1v-1z"/></svg>
      <strong>Lock conversation</strong>
    </a>

    <div id="lock-confirmation" style="display:none">
      <h2 class="facebox-header" data-facebox-id="facebox-header">Lock conversation on this pull request</h2>

      <p data-facebox-id="facebox-description">Locking the conversation means:</p>

      <ul>
          <li>Other users <strong>can’t add new comments</strong> to this pull request.</li>
            <li>
              You and other members of teams with
              <a href="https://help.github.com/articles/what-are-the-different-access-permissions">write access</a>
              to this repository <strong>can still leave comments</strong> that others can see.
            </li>
      </ul>

      <p>You can always unlock this pull request again in the future.</p>

      <div class="facebox-footer">
        <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/issues/979/lock" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="put" /><input name="authenticity_token" type="hidden" value="24nIV6M5qBXK2Q9sPv5jrp76sBqj2V2+XwnycT2IszMPRgbYNmsuxCN3+xNDKZZH9F+7/QxuOCwpphmTZWmjXw==" /></div>
          <button type="submit" class="btn btn-danger btn-block">
            Lock conversation on this pull request
          </button>
</form>      </div>
    </div>
  </div>


</div>


</div>

<div class="discussion-timeline pull-discussion-timeline js-pull-discussion-timeline js-quote-selection-container js-review-state-classes  ">
  <div class="js-discussion js-socket-channel" data-channel="marked-as-read:pull-request:131053699">
    

  
  <div class="timeline-comment-wrapper js-comment-container">

    

<div class="avatar-parent-child timeline-comment-avatar">
    <a href="/jariketting">
      <img alt="@jariketting" class="avatar rounded-1" height="44" src="https://avatars3.githubusercontent.com/u/15982332?v=4&amp;s=88" width="44" />
    </a>

</div>



      
<div id="issue-243670920"
     class="comment previewable-edit js-comment js-task-list-container timeline-comment js-reorderable-task-lists reorderable-task-lists "
     data-body-version="d41d8cd98f00b204e9800998ecf8427e">

  
<div class="timeline-comment-header">
  <div class="timeline-comment-actions">

      
  <span class="reaction-popover-container dropdown js-socket-channel js-updatable-content js-reaction-popover-container js-comment-header-reaction-button js-menu-container"
      data-channel="reaction:pull-request:131053699"
      data-url="/_render_node/MDExOlB1bGxSZXF1ZXN0MTMxMDUzNjk5/comments/comment_header_reaction_button">
    <button type="button" class="btn-link timeline-comment-action tooltipped tooltipped-n js-menu-target" aria-label="Add your reaction" aria-expanded="false" aria-haspopup="true">
      <svg aria-hidden="true" class="octicon octicon-plus-small add-reaction-plus-icon" height="16" version="1.1" viewBox="0 0 7 16" width="7"><path fill-rule="evenodd" d="M4 7V4H3v3H0v1h3v3h1V8h3V7H4z"/></svg>
      <svg aria-hidden="true" class="octicon octicon-smiley" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm4.81 12.81a6.72 6.72 0 0 1-2.17 1.45c-.83.36-1.72.53-2.64.53-.92 0-1.81-.17-2.64-.53-.81-.34-1.55-.83-2.17-1.45a6.773 6.773 0 0 1-1.45-2.17A6.59 6.59 0 0 1 1.21 8c0-.92.17-1.81.53-2.64.34-.81.83-1.55 1.45-2.17.62-.62 1.36-1.11 2.17-1.45A6.59 6.59 0 0 1 8 1.21c.92 0 1.81.17 2.64.53.81.34 1.55.83 2.17 1.45.62.62 1.11 1.36 1.45 2.17.36.83.53 1.72.53 2.64 0 .92-.17 1.81-.53 2.64-.34.81-.83 1.55-1.45 2.17zM4 6.8v-.59c0-.66.53-1.19 1.2-1.19h.59c.66 0 1.19.53 1.19 1.19v.59c0 .67-.53 1.2-1.19 1.2H5.2C4.53 8 4 7.47 4 6.8zm5 0v-.59c0-.66.53-1.19 1.2-1.19h.59c.66 0 1.19.53 1.19 1.19v.59c0 .67-.53 1.2-1.19 1.2h-.59C9.53 8 9 7.47 9 6.8zm4 3.2c-.72 1.88-2.91 3-5 3s-4.28-1.13-5-3c-.14-.39.23-1 .66-1h8.59c.41 0 .89.61.75 1z"/></svg>
    </button>
    
<div class="dropdown-menu-content anim-scale-in js-menu-content">
  <div class="dropdown-menu dropdown-menu-sw add-reaction-popover js-add-reaction-popover">
    <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/users/cruisereizen/reactions" class="reaction-popover-form js-pick-reaction" data-remote="true" data-type="json" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="put" /><input name="authenticity_token" type="hidden" value="NrIrHDQhNG1gvsvCyCvMpzQDKscPMhxjbLxodax7s7G7Ht54qKgchhNKlk/9lTuK2U67iKlOTVu08pgfSoh7ZA==" /></div>
      <p class="text-gray mx-2 my-1">
        <span class="js-reaction-description">Pick your reaction</span>
        <img alt="" class="loading-spinner" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
      </p>

      <div class="dropdown-divider"></div>

      <div class="add-reactions-options mx-1 mb-1">
        <input type="hidden" name="input[subjectId]" value="MDExOlB1bGxSZXF1ZXN0MTMxMDUzNjk5">

          <button type="submit"
            class="btn-link add-reactions-options-item js-reaction-option-item"
            data-reaction-label="+1"
            name="input[content]"
            aria-label="React with thumbs up emoji"
            value="THUMBS_UP react">
            <g-emoji alias="+1" class="emoji" fallback-src="https://assets-cdn.github.com/images/icons/emoji/unicode/1f44d.png" ios-version="6.0">👍</g-emoji>
          </button>
          <button type="submit"
            class="btn-link add-reactions-options-item js-reaction-option-item"
            data-reaction-label="-1"
            name="input[content]"
            aria-label="React with thumbs down emoji"
            value="THUMBS_DOWN react">
            <g-emoji alias="-1" class="emoji" fallback-src="https://assets-cdn.github.com/images/icons/emoji/unicode/1f44e.png" ios-version="6.0">👎</g-emoji>
          </button>
          <button type="submit"
            class="btn-link add-reactions-options-item js-reaction-option-item"
            data-reaction-label="Laugh"
            name="input[content]"
            aria-label="React with laugh emoji"
            value="LAUGH react">
            <g-emoji alias="smile" class="emoji" fallback-src="https://assets-cdn.github.com/images/icons/emoji/unicode/1f604.png" ios-version="6.0">😄</g-emoji>
          </button>
          <button type="submit"
            class="btn-link add-reactions-options-item js-reaction-option-item"
            data-reaction-label="Hooray"
            name="input[content]"
            aria-label="React with hooray emoji"
            value="HOORAY react">
            <g-emoji alias="tada" class="emoji" fallback-src="https://assets-cdn.github.com/images/icons/emoji/unicode/1f389.png" ios-version="6.0">🎉</g-emoji>
          </button>
          <button type="submit"
            class="btn-link add-reactions-options-item js-reaction-option-item"
            data-reaction-label="Confused"
            name="input[content]"
            aria-label="React with confused emoji"
            value="CONFUSED react">
            <g-emoji alias="thinking_face" class="emoji" fallback-src="https://assets-cdn.github.com/images/icons/emoji/unicode/1f615.png" ios-version="6.0">😕</g-emoji>
          </button>
          <button type="submit"
            class="btn-link add-reactions-options-item js-reaction-option-item"
            data-reaction-label="Heart"
            name="input[content]"
            aria-label="React with heart emoji"
            value="HEART react">
            <g-emoji alias="heart" class="emoji" fallback-src="https://assets-cdn.github.com/images/icons/emoji/unicode/2764.png" ios-version="6.0">❤️</g-emoji>
          </button>
      </div>
</form>  </div>
</div>

  </span>


      <button type="button" class="btn-link timeline-comment-action js-comment-edit-button tooltipped tooltipped-nw"
        aria-label="Edit comment">
        <svg aria-hidden="true" class="octicon octicon-pencil" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"/></svg>
      </button>

  </div>

    



  <h3 class="timeline-comment-header-text f5 text-normal">

    <strong>
        <a href="/jariketting" class="author">jariketting</a>
        
    </strong>

    commented

    <a href="#issue-243670920" class="timestamp"><relative-time datetime="2017-07-18T10:31:44Z">Jul 18, 2017</relative-time></a>


  </h3>
</div>


  <div class="edit-comment-hide">
      <p class="comment-form-stale">
        <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg> The content you are editing has changed. Please try again.
      </p>
    <table class="d-block">
      <tbody class="d-block">
        <tr class="d-block">
          <td class="d-block comment-body markdown-body  js-comment-body">
              <p class="text-gray">
                <em>No description provided.</em>
              </p>
          </td>
        </tr>
      </tbody>
    </table>

      

<div class="comment-reactions  js-reactions-container js-socket-channel js-updatable-content"

      data-channel="reaction:pull-request:131053699"
      data-url="/_render_node/MDExOlB1bGxSZXF1ZXN0MTMxMDUzNjk5/comments/reactions"
    >
</div>

  </div>

    <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/issues/979" class="js-comment-update" data-remote="" data-type="json" data-upload-policy-authenticity-token="2gr0Ykd2znQwvBmXgFfVHtLn5AaXxz8A/SxqhtCFf2jTzp1NMwlYN7Sal0iUgMnH4a7pxsTun6Iukm5YZrJDFw==" data-upload-policy-url="/upload/policies/assets" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="put" /><input name="authenticity_token" type="hidden" value="Jwf/t5uiLKQa9TgqjBwneCHM7WpX+ScAeDllRUpWF0fzze/CZvVEZ0BV+/c6jtDOfGSXy495uZoWu8Ci11n9ZQ==" /></div>
      <div class="js-suggester-container js-previewable-comment-form previewable-comment-form write-selected" data-preview-url="/preview?markdown_unsupported=false&amp;repository=73371264" data-preview-authenticity-token="XmO+LYhdoFihi5lxELCa2SiHYt6swM6aIeeei5jniNszuPVVyiFGJg2tHIQZjnGoiFtBAuDhAtkPSJ6TjWQ2XQ==">
  <div class="comment-form-head tabnav">
      <div class="js-toolbar toolbar-commenting">
  <div class="toolbar-group">
    <div class="toolbar-item dropdown js-menu-container">
      <button type="button" tabindex="-1" class="js-menu-target menu-target tooltipped tooltipped-n" aria-label="Add header text" aria-expanded="false" aria-haspopup="true">
        <svg aria-hidden="true" class="octicon octicon-text-size" height="16" version="1.1" viewBox="0 0 18 16" width="18"><path fill-rule="evenodd" d="M13.62 9.08L12.1 3.66h-.06l-1.5 5.42h3.08zM5.7 10.13S4.68 6.52 4.53 6.02h-.08l-1.13 4.11H5.7zM17.31 14h-2.25l-.95-3.25h-4.07L9.09 14H6.84l-.69-2.33H2.87L2.17 14H0l3.3-9.59h2.5l2.17 6.34L10.86 2h2.52l3.94 12h-.01z"/></svg>
        <span class="dropdown-caret"></span>
      </button>

      <div class="dropdown-menu-content js-menu-content">
        <ul class="dropdown-menu dropdown-menu-s">
          <button type="button" class="js-toolbar-item dropdown-item dropdown-header1" data-prefix="# " data-ga-click="Markdown Toolbar, click, header1">
            Header
          </button>
          <button type="button" class="js-toolbar-item dropdown-item dropdown-header2" data-prefix="## " data-ga-click="Markdown Toolbar, click, header2">
            Header
          </button>
          <button type="button" class="js-toolbar-item dropdown-item dropdown-header3" data-prefix="### " data-ga-click="Markdown Toolbar, click, header3">
            Header
          </button>
        </ul>
      </div>
    </div>

    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add bold text <ctrl+b>" data-prefix="**" data-suffix="**" data-toolbar-hotkey="b" data-ga-click="Markdown Toolbar, click, bold" data-trim-first>
      <svg aria-hidden="true" class="octicon octicon-bold" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path fill-rule="evenodd" d="M1 2h3.83c2.48 0 4.3.75 4.3 2.95 0 1.14-.63 2.23-1.67 2.61v.06c1.33.3 2.3 1.23 2.3 2.86 0 2.39-1.97 3.52-4.61 3.52H1V2zm3.66 4.95c1.67 0 2.38-.66 2.38-1.69 0-1.17-.78-1.61-2.34-1.61H3.13v3.3h1.53zm.27 5.39c1.77 0 2.75-.64 2.75-1.98 0-1.27-.95-1.81-2.75-1.81h-1.8v3.8h1.8v-.01z"/></svg>
    </button>

    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add italic text <ctrl+i>" data-prefix="_" data-suffix="_" data-toolbar-hotkey="i" data-ga-click="Markdown Toolbar, click, italic" data-trim-first>
      <svg aria-hidden="true" class="octicon octicon-italic" height="16" version="1.1" viewBox="0 0 6 16" width="6"><path fill-rule="evenodd" d="M2.81 5h1.98L3 14H1l1.81-9zm.36-2.7c0-.7.58-1.3 1.33-1.3.56 0 1.13.38 1.13 1.03 0 .75-.59 1.3-1.33 1.3-.58 0-1.13-.38-1.13-1.03z"/></svg>
    </button>
  </div>

  <div class="toolbar-group">
    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Insert a quote" data-prefix="> " data-multiline="true" data-ga-click="Markdown Toolbar, click, quote" data-surround-with-newlines>
      <svg aria-hidden="true" class="octicon octicon-quote" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M6.16 3.5C3.73 5.06 2.55 6.67 2.55 9.36c.16-.05.3-.05.44-.05 1.27 0 2.5.86 2.5 2.41 0 1.61-1.03 2.61-2.5 2.61-1.9 0-2.99-1.52-2.99-4.25 0-3.8 1.75-6.53 5.02-8.42L6.16 3.5zm7 0c-2.43 1.56-3.61 3.17-3.61 5.86.16-.05.3-.05.44-.05 1.27 0 2.5.86 2.5 2.41 0 1.61-1.03 2.61-2.5 2.61-1.89 0-2.98-1.52-2.98-4.25 0-3.8 1.75-6.53 5.02-8.42l1.14 1.84h-.01z"/></svg>
    </button>

    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Insert code" data-prefix="`" data-suffix="`" data-block-prefix="```" data-block-suffix="```" data-ga-click="Markdown Toolbar, click, code">
      <svg aria-hidden="true" class="octicon octicon-code" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"/></svg>
    </button>

    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add a link <ctrl+k>" data-prefix="[" data-suffix="](url)" data-replace-next="url" data-toolbar-hotkey="k" data-scan-for="https?://" data-ga-click="Markdown Toolbar, click, link">
      <svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"/></svg>
    </button>
  </div>

  <div class="toolbar-group">
    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add a bulleted list" data-multiline="true" data-prefix="- " data-multiline="true" data-ga-click="Markdown Toolbar, click, unordered list" data-surround-with-newlines>
      <svg aria-hidden="true" class="octicon octicon-list-unordered" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M2 13c0 .59 0 1-.59 1H.59C0 14 0 13.59 0 13c0-.59 0-1 .59-1h.81c.59 0 .59.41.59 1H2zm2.59-9h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1H4.59C4 2 4 2.41 4 3c0 .59 0 1 .59 1zM1.41 7H.59C0 7 0 7.41 0 8c0 .59 0 1 .59 1h.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01zm0-5H.59C0 2 0 2.41 0 3c0 .59 0 1 .59 1h.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01zm10 5H4.59C4 7 4 7.41 4 8c0 .59 0 1 .59 1h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01zm0 5H4.59C4 12 4 12.41 4 13c0 .59 0 1 .59 1h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01z"/></svg>
    </button>
    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add a numbered list" data-prefix="1. " data-multiline="true" data-ga-click="Markdown Toolbar, click, ordered list" data-ordered-list>
      <svg aria-hidden="true" class="octicon octicon-list-ordered" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 13c0 .59 0 1-.59 1H4.59C4 14 4 13.59 4 13c0-.59 0-1 .59-1h6.81c.59 0 .59.41.59 1H12zM4.59 4h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1H4.59C4 2 4 2.41 4 3c0 .59 0 1 .59 1zm6.81 3H4.59C4 7 4 7.41 4 8c0 .59 0 1 .59 1h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1zM2 1h-.72c-.3.19-.58.25-1.03.34V2H1v2.14H.16V5H3v-.86H2V1zm.25 8.13c-.17 0-.45.03-.66.06.53-.56 1.14-1.25 1.14-1.89C2.71 6.52 2.17 6 1.37 6c-.59 0-.97.2-1.38.64l.58.58c.19-.19.38-.38.64-.38.28 0 .48.16.48.52 0 .53-.77 1.2-1.7 2.06V10h3l-.09-.88h-.66l.01.01zm-.08 3.78v-.03c.44-.19.64-.47.64-.86 0-.7-.56-1.11-1.44-1.11-.48 0-.89.19-1.28.52l.55.64c.25-.2.44-.31.69-.31.27 0 .42.13.42.36 0 .27-.2.44-.86.44v.75c.83 0 .98.17.98.47 0 .25-.23.38-.58.38-.28 0-.56-.14-.81-.38l-.48.66c.3.36.77.56 1.41.56.83 0 1.53-.41 1.53-1.16 0-.5-.31-.81-.77-.94v.01z"/></svg>
    </button>

      <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add a task list" data-prefix="- [ ] " data-toolbar-hotkey="L" data-multiline data-ga-click="Markdown Toolbar, click, task list" data-surround-with-newlines>
        <svg aria-hidden="true" class="octicon octicon-tasklist" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M15.41 9H7.59C7 9 7 8.59 7 8c0-.59 0-1 .59-1h7.81c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zM9.59 4C9 4 9 3.59 9 3c0-.59 0-1 .59-1h5.81c.59 0 .59.41.59 1 0 .59 0 1-.59 1H9.59zM0 3.91l1.41-1.3L3 4.2 7.09 0 8.5 1.41 3 6.91l-3-3zM7.59 12h7.81c.59 0 .59.41.59 1 0 .59 0 1-.59 1H7.59C7 14 7 13.59 7 13c0-.59 0-1 .59-1z"/></svg>
      </button>
  </div>

  <div class="toolbar-group">
      <div class="toolbar-item select-menu select-menu-modal-right js-menu-container js-select-menu js-load-contents js-saved-reply-container"
          data-contents-url="/settings/replies?context=pull_request">
        <button type="button" tabindex="-1" class="js-menu-target menu-target tooltipped tooltipped-nw"
           aria-label="Insert a saved reply" aria-expanded="false" aria-haspopup="true" data-ga-click="Markdown Toolbar, click, saved reply">
          <svg aria-hidden="true" class="octicon octicon-reply" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M6 3.5c3.92.44 8 3.125 8 10-2.312-5.062-4.75-6-8-6V11L.5 5.5 6 0v3.5z"/></svg>
          <span class="dropdown-caret"></span>
        </button>

        <div class="select-menu-modal-holder js-menu-content js-navigation-container">
          <div class="select-menu-modal">
            <div class="select-menu-header">
              <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
              <span class="select-menu-title">Select a saved reply</span>
            </div>
            <div class="js-select-menu-deferred-content"></div>
            <div class="select-menu-loading-overlay anim-pulse">
              <svg aria-hidden="true" class="octicon octicon-octoface" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M14.7 5.34c.13-.32.55-1.59-.13-3.31 0 0-1.05-.33-3.44 1.3-1-.28-2.07-.32-3.13-.32s-2.13.04-3.13.32c-2.39-1.64-3.44-1.3-3.44-1.3-.68 1.72-.26 2.99-.13 3.31C.49 6.21 0 7.33 0 8.69 0 13.84 3.33 15 7.98 15S16 13.84 16 8.69c0-1.36-.49-2.48-1.3-3.35zM8 14.02c-3.3 0-5.98-.15-5.98-3.35 0-.76.38-1.48 1.02-2.07 1.07-.98 2.9-.46 4.96-.46 2.07 0 3.88-.52 4.96.46.65.59 1.02 1.3 1.02 2.07 0 3.19-2.68 3.35-5.98 3.35zM5.49 9.01c-.66 0-1.2.8-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.54-1.78-1.2-1.78zm5.02 0c-.66 0-1.2.79-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.53-1.78-1.2-1.78z"/></svg>
            </div>
          </div>
        </div>
      </div>

      <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-nw" aria-label="Directly mention a user or team" data-prefix="@" data-prefix-space data-ga-click="Markdown Toolbar, click, mention">
        <svg aria-hidden="true" class="octicon octicon-mention" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M6.58 15c1.25 0 2.52-.31 3.56-.94l-.42-.94c-.84.52-1.89.83-3.03.83-3.23 0-5.64-2.08-5.64-5.72 0-4.37 3.23-7.18 6.58-7.18 3.45 0 5.22 2.19 5.22 5.2 0 2.39-1.34 3.86-2.5 3.86-1.05 0-1.36-.73-1.05-2.19l.73-3.75H8.98l-.11.72c-.41-.63-.94-.83-1.56-.83-2.19 0-3.66 2.39-3.66 4.38 0 1.67.94 2.61 2.3 2.61.84 0 1.67-.53 2.3-1.25.11.94.94 1.45 1.98 1.45 1.67 0 3.77-1.67 3.77-5C14 2.61 11.59 0 7.83 0 3.66 0 0 3.33 0 8.33 0 12.71 2.92 15 6.58 15zm-.31-5c-.73 0-1.36-.52-1.36-1.67 0-1.45.94-3.22 2.41-3.22.52 0 .84.2 1.25.83l-.52 3.02c-.63.73-1.25 1.05-1.78 1.05V10z"/></svg>
      </button>

      <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-nw" aria-label="Reference an issue or pull request" data-prefix="#" data-prefix-space data-ga-click="Markdown Toolbar, click, reference">
        <svg aria-hidden="true" class="octicon octicon-bookmark" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path fill-rule="evenodd" d="M9 0H1C.27 0 0 .27 0 1v15l5-3.09L10 16V1c0-.73-.27-1-1-1zm-.78 4.25L6.36 5.61l.72 2.16c.06.22-.02.28-.2.17L5 6.6 3.12 7.94c-.19.11-.25.05-.2-.17l.72-2.16-1.86-1.36c-.17-.16-.14-.23.09-.23l2.3-.03.7-2.16h.25l.7 2.16 2.3.03c.23 0 .27.08.09.23h.01z"/></svg>
      </button>
  </div>
</div>


    <nav class="tabnav-tabs" role="tablist">
      <button type="button" class="btn-link tabnav-tab write-tab js-write-tab selected" role="tab" aria-selected="true">Write</button>
      <button type="button" class="btn-link tabnav-tab preview-tab js-preview-tab" role="tab">Preview</button>
    </nav>
  </div>

  <p class="comment-form-stale">
    <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg> The content you are editing has changed. Please try again.
  </p>

  <div class="write-content js-write-bucket js-uploadable-container js-upload-markdown-image is-default upload-enabled"
      data-upload-policy-url="/upload/policies/assets" data-upload-policy-authenticity-token="9nNux60SLNT2skfuHmQSd7Hd8MFF+HNSx+gBZsNiqYX/twfo2W26l3KUyTEKsw6ugpT9ARbR0/AUVgW4dVWV+g=="
        data-upload-repository-id="73371264"
      >
    <input type="hidden" name="context" value="">

    <input type="hidden" name="saved_reply_id" class="js-saved-reply-id js-resettable-field" value="" data-reset-value="">

    <input type="hidden" name="pull_request[id]" value="MDExOlB1bGxSZXF1ZXN0MTMxMDUzNjk5">
    <textarea name="pull_request[body]"
              id="issue-243670920-body"
              placeholder="Leave a comment"
              aria-label="Comment body"
              class="form-control input-contrast comment-form-textarea js-comment-field js-improved-comment-field js-task-list-field js-quick-submit js-size-to-fit js-suggester-field js-quote-selection-target js-session-resumable"></textarea>

      <p class="drag-and-drop position-relative">
    <span class="default">
        Attach files by dragging &amp; dropping,
        <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser" aria-label="Attach files to your comment">
        <span class="btn-link manual-file-chooser-text">selecting them</span>, or pasting
        from the clipboard.
    </span>
    <span class="loading">
      <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" /> Uploading your files…
    </span>
    <span class="error bad-file">
      We don’t support that file type.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a
        PNG, GIF, JPG, DOCX, PPTX, XLSX, TXT, PDF, or ZIP.
      </span>
    </span>
    <span class="error bad-permissions">
      Attaching documents requires write permission to this repository.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a PNG, GIF, or JPG.
      </span>
    </span>
    <span class="error repository-required">
      We don’t support that file type.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a PNG, GIF, or JPG.
      </span>
    </span>
    <span class="error too-big">
      Yowza, that’s a big file.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a file smaller than 10MB.
      </span>
    </span>
    <span class="error empty">
      This file is empty.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a file that’s not empty.
      </span>
    </span>
    <span class="error hidden-file">
      This file is hidden.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again</button> with another file.
      </span>
    </span>
    <span class="error failed-request">
      Something went really wrong, and we can’t process that file.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again.</button>
      </span>
    </span>
  </p>


    <div class="suggester-container">
      <div class="suggester js-suggester js-navigation-container" data-url="/suggestions?global_id=MDExOlB1bGxSZXF1ZXN0MTMxMDUzNjk5">
      </div>
    </div>
  </div>

  <div class="preview-content">
    <div class="comment">
  <div class="comment-body markdown-body js-preview-body">
    <p>Nothing to preview</p>
  </div>
</div>

  </div>

  <div class="clearfix">
    <div class="float-left">
        <a class="tabnav-extra" href="https://guides.github.com/features/mastering-markdown/" target="_blank" data-ga-click="Markdown Toolbar, click, help">
          <svg aria-hidden="true" class="octicon octicon-markdown v-align-bottom" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M14.85 3H1.15C.52 3 0 3.52 0 4.15v7.69C0 12.48.52 13 1.15 13h13.69c.64 0 1.15-.52 1.15-1.15v-7.7C16 3.52 15.48 3 14.85 3zM9 11H7V8L5.5 9.92 4 8v3H2V5h2l1.5 2L7 5h2v6zm2.99.5L9.5 8H11V5h2v3h1.5l-2.51 3.5z"/></svg>
          Styling with Markdown is supported
        </a>
    </div>

    <div class="form-actions">
      <button class="btn btn-primary" type="submit" data-disable-with>Update comment</button>
      <button class="btn btn-danger js-comment-cancel-button" type="button"
              data-confirm-text="Are you sure you want to discard your unsaved changes?">
        Cancel
      </button>
    </div>
  </div>

  <div class="comment-form-error comment-form-bottom js-comment-update-error"></div>
</div>

</form></div>

  </div>

  
  
<div class="discussion-item discussion-commits" id="commits-pushed-26a52a1">
    <h3 class="discussion-item-header f5 text-normal">
      <span class="discussion-item-icon">
        <svg aria-hidden="true" class="octicon octicon-repo-push" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M4 3H3V2h1v1zM3 5h1V4H3v1zm4 0L4 9h2v7h2V9h2L7 5zm4-5H1C.45 0 0 .45 0 1v12c0 .55.45 1 1 1h4v-1H1v-2h4v-1H2V1h9.02L11 10H9v1h2v2H9v1h2c.55 0 1-.45 1-1V1c0-.55-.45-1-1-1z"/></svg>
      </span>
      
  <span class="author">Jari</span>

      added some commits
      <a href="#commits-pushed-26a52a1" class="timestamp">
        <relative-time datetime="2017-07-18T08:44:06Z">Jul 18, 2017</relative-time>
      </a>
    </h3>
  <div class="discussion-item-body">
    <table class="timeline-commits">
        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:26a52a1ebb6cbb3efd627cf4fcba4878694c77d5"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OjI2YTUyYTFlYmI2Y2JiM2VmZDYyN2NmNGZjYmE0ODc4Njk0Yzc3ZDU=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/26a52a1ebb6cbb3efd627cf4fcba4878694c77d5" class="message" data-pjax="true" title="Added lazyload script">Added lazyload script</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/26a52a1ebb6cbb3efd627cf4fcba4878694c77d5" class="commit-id">26a52a1</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:97c0b5704290e3f61a8204d1916d0e9990130ddb"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5Ojk3YzBiNTcwNDI5MGUzZjYxYTgyMDRkMTkxNmQwZTk5OTAxMzBkZGI=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/97c0b5704290e3f61a8204d1916d0e9990130ddb" class="message" data-pjax="true" title="Added minify to minify.php">Added minify to minify.php</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/97c0b5704290e3f61a8204d1916d0e9990130ddb" class="commit-id">97c0b57</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:3df076c83629410aa980f33c25c43db87640448c"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OjNkZjA3NmM4MzYyOTQxMGFhOTgwZjMzYzI1YzQzZGI4NzY0MDQ0OGM=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/3df076c83629410aa980f33c25c43db87640448c" class="message" data-pjax="true" title="Added lazyloader to cruisepagina and bodybottom scripts">Added lazyloader to cruisepagina and bodybottom scripts</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/3df076c83629410aa980f33c25c43db87640448c" class="commit-id">3df076c</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:9f4238f6919c697f5d837808ed8fe2405e266e4d"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OjlmNDIzOGY2OTE5YzY5N2Y1ZDgzNzgwOGVkOGZlMjQwNWUyNjZlNGQ=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/9f4238f6919c697f5d837808ed8fe2405e266e4d" class="message" data-pjax="true" title="Added fade effect as fallback if images does not load fast enough">Added fade effect as fallback if images does not load fast enough</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/9f4238f6919c697f5d837808ed8fe2405e266e4d" class="commit-id">9f4238f</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:f92ede9b286ba55058fa63a8671c35b8923974da"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OmY5MmVkZTliMjg2YmE1NTA1OGZhNjNhODY3MWMzNWI4OTIzOTc0ZGE=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/f92ede9b286ba55058fa63a8671c35b8923974da" class="message" data-pjax="true" title="Added more lazyload items to cruisepagina">Added more lazyload items to cruisepagina</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/f92ede9b286ba55058fa63a8671c35b8923974da" class="commit-id">f92ede9</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:bd4304d44f109c4c6760892810f25a692628d9c8"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OmJkNDMwNGQ0NGYxMDljNGM2NzYwODkyODEwZjI1YTY5MjYyOGQ5Yzg=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/bd4304d44f109c4c6760892810f25a692628d9c8" class="message" data-pjax="true" title="Added lazyload to cruisespecialist">Added lazyload to cruisespecialist</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/bd4304d44f109c4c6760892810f25a692628d9c8" class="commit-id">bd4304d</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:284b90c89de889f0152beb63273ec237e03f36dd"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OjI4NGI5MGM4OWRlODg5ZjAxNTJiZWI2MzI3M2VjMjM3ZTAzZjM2ZGQ=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/284b90c89de889f0152beb63273ec237e03f36dd" class="message" data-pjax="true" title="Changed threshold to 500px to prevent popping images">Changed threshold to 500px to prevent popping images</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/284b90c89de889f0152beb63273ec237e03f36dd" class="commit-id">284b90c</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:bad6c1458e94fdbc17ed8d93637f7764a8d43774"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OmJhZDZjMTQ1OGU5NGZkYmMxN2VkOGQ5MzYzN2Y3NzY0YThkNDM3NzQ=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/bad6c1458e94fdbc17ed8d93637f7764a8d43774" class="message" data-pjax="true" title="Added lazyload to actie page">Added lazyload to actie page</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/bad6c1458e94fdbc17ed8d93637f7764a8d43774" class="commit-id">bad6c14</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:a93af3e5e0512d798fab0788694a8df36249fc61"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OmE5M2FmM2U1ZTA1MTJkNzk4ZmFiMDc4ODY5NGE4ZGYzNjI0OWZjNjE=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/a93af3e5e0512d798fab0788694a8df36249fc61" class="message" data-pjax="true" title="Added lazyload">Added lazyload</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/a93af3e5e0512d798fab0788694a8df36249fc61" class="commit-id">a93af3e</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:6d6106dcc4bfad7efef9baf22c5a0255c1627321"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OjZkNjEwNmRjYzRiZmFkN2VmZWY5YmFmMjJjNWEwMjU1YzE2MjczMjE=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/6d6106dcc4bfad7efef9baf22c5a0255c1627321" class="message" data-pjax="true" title="Added lazyload">Added lazyload</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/6d6106dcc4bfad7efef9baf22c5a0255c1627321" class="commit-id">6d6106d</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:80b1df018da512b7c78e5cb01471e3ab069fdb3a"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OjgwYjFkZjAxOGRhNTEyYjdjNzhlNWNiMDE0NzFlM2FiMDY5ZmRiM2E=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/80b1df018da512b7c78e5cb01471e3ab069fdb3a" class="message" data-pjax="true" title="Added lazyload">Added lazyload</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/80b1df018da512b7c78e5cb01471e3ab069fdb3a" class="commit-id">80b1df0</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:e62feeecc2afea018b88f90ec6aba2e2029b5ffa"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OmU2MmZlZWVjYzJhZmVhMDE4Yjg4ZjkwZWM2YWJhMmUyMDI5YjVmZmE=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/e62feeecc2afea018b88f90ec6aba2e2029b5ffa" class="message" data-pjax="true" title="Added lazyload">Added lazyload</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/e62feeecc2afea018b88f90ec6aba2e2029b5ffa" class="commit-id">e62feee</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:f5caf356aa99326b050f427599c2a6b88ba3d5cc"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OmY1Y2FmMzU2YWE5OTMyNmIwNTBmNDI3NTk5YzJhNmI4OGJhM2Q1Y2M=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/f5caf356aa99326b050f427599c2a6b88ba3d5cc" class="message" data-pjax="true" title="Added lazyload">Added lazyload</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/f5caf356aa99326b050f427599c2a6b88ba3d5cc" class="commit-id">f5caf35</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:c192a4d8d84904a57688f33e415fb2430eb2ed03"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OmMxOTJhNGQ4ZDg0OTA0YTU3Njg4ZjMzZTQxNWZiMjQzMGViMmVkMDM=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/c192a4d8d84904a57688f33e415fb2430eb2ed03" class="message" data-pjax="true" title="Added lazyload">Added lazyload</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/c192a4d8d84904a57688f33e415fb2430eb2ed03" class="commit-id">c192a4d</a></code>
  </td>
</tr>

        
<tr class="commit js-details-container Details js-socket-channel js-updatable-content" data-channel="repo:73371264:commit:719a3e2530213071eec9d579332af8fa1dcb4b6f"
    data-url="/_render_node/MDE3OlB1bGxSZXF1ZXN0Q29tbWl0MTMxMDUzNjk5OjcxOWEzZTI1MzAyMTMwNzFlZWM5ZDU3OTMzMmFmOGZhMWRjYjRiNmY=/commit/pull_condensed">
  <td class="commit-icon">
    <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"/></svg>
  </td>

  <td class="commit-gravatar no-wrap text-right">
    
  <img src="https://camo.githubusercontent.com/38f838a1a05c3698ca6cf629f328d005eb161330/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f63396431353339613332376137613539336637646236653133663938343266363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d7826733d3332" width="16" height="16" class="avatar avatar-small">

  </td>

  <td class="commit-author">
    <strong>
  <span class="author">Jari</span>
</strong>
  </td>

  <td class="commit-message">
    <code>
      <a href="/cruisereizen/cruisereizen/pull/979/commits/719a3e2530213071eec9d579332af8fa1dcb4b6f" class="message" data-pjax="true" title="Added lazyload">Added lazyload</a>
    </code>


  </td>

  <td class="commit-sig-status">
    

  </td>

  <td class="commit-ci-status">
  </td>

  <td class="commit-meta">
    <code><a href="/cruisereizen/cruisereizen/pull/979/commits/719a3e2530213071eec9d579332af8fa1dcb4b6f" class="commit-id">719a3e2</a></code>
  </td>
</tr>

    </table>
  </div>
</div>


  
  


      




      
  <div class="discussion-item discussion-item-merged js-details-container Details">
  <h3 class="discussion-item-header f5 text-normal" id="event-1168076570">
      <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/pull/979/revert" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="nxFF0lOUa1urob8gPXtTMC2PdwbwEpcWLdgBCQ0u1loUTSf01t/pIfZXFYds5jaWL+P/5onblhYS8H7aZyHPMw==" /></div>
        <button type="submit" aria-label="Create a new pull request to revert these changes" class="btn btn-sm btn-outline tooltipped tooltipped-s"
          data-ga-click="Repository, revert, location:pull request event; text:Revert">
          Revert
        </button>
</form>

    <span class="discussion-item-icon">
      <svg aria-hidden="true" class="octicon octicon-git-merge" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M10 7c-.73 0-1.38.41-1.73 1.02V8C7.22 7.98 6 7.64 5.14 6.98c-.75-.58-1.5-1.61-1.89-2.44A1.993 1.993 0 0 0 2 .99C.89.99 0 1.89 0 3a2 2 0 0 0 1 1.72v6.56c-.59.35-1 .99-1 1.72 0 1.11.89 2 2 2a1.993 1.993 0 0 0 1-3.72V7.67c.67.7 1.44 1.27 2.3 1.69.86.42 2.03.63 2.97.64v-.02c.36.61 1 1.02 1.73 1.02 1.11 0 2-.89 2-2 0-1.11-.89-2-2-2zm-6.8 6c0 .66-.55 1.2-1.2 1.2-.65 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm8 6c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
    </span>
      <img src="https://avatars2.githubusercontent.com/u/15982332?v=4&amp;s=32" alt="@jariketting" height="16" width="16" class="avatar">
      <a href="/jariketting" class="author">jariketting</a>
      merged commit <a href="/cruisereizen/cruisereizen/commit/79eda58c4a0c998aa926910bc2bc88e13e5829b2"><code class="discussion-item-entity">79eda58</code></a>
    into
    <span class="commit-ref user-select-contain">
      <span class="base-ref" title="cruisereizen/cruisereizen:develop">
        <span class="css-truncate-target">develop</span>
      </span>
    </span>
    <a href="/cruisereizen/cruisereizen/pull/979#event-1168076570" class="timestamp"><relative-time datetime="2017-07-18T10:31:49Z">Jul 18, 2017</relative-time></a>

  </h3>

</div>



  <div class="closed-banner"></div>




      
  <div class="discussion-item discussion-item-assigned">
    <h3 class="discussion-item-header f5 text-normal" id="event-1168207783">

      <span class="discussion-item-icon">
        <svg aria-hidden="true" class="octicon octicon-person" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 14.002a.998.998 0 0 1-.998.998H1.001A1 1 0 0 1 0 13.999V13c0-2.633 4-4 4-4s.229-.409 0-1c-.841-.62-.944-1.59-1-4 .173-2.413 1.867-3 3-3s2.827.586 3 3c-.056 2.41-.159 3.38-1 4-.229.59 0 1 0 1s4 1.367 4 4v1.002z"/></svg>
      </span>
      <img alt="" class="avatar" height="16" src="https://avatars2.githubusercontent.com/u/15982332?v=4&amp;s=32" width="16" />
      <a href="/jariketting" class="author">jariketting</a>
      
      self-assigned this
      
      
      <a href="#event-1168207783" class="timestamp"><relative-time class="timestamp" datetime="2017-07-18T12:08:36Z">Jul 18, 2017</relative-time></a>
    </h3>
  </div>



      
  <div class="discussion-item discussion-item-labeled">
    <h3 class="discussion-item-header f5 text-normal" id="event-1168207930">

      <span class="discussion-item-icon">
        <svg aria-hidden="true" class="octicon octicon-tag" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M7.73 1.73C7.26 1.26 6.62 1 5.96 1H3.5C2.13 1 1 2.13 1 3.5v2.47c0 .66.27 1.3.73 1.77l6.06 6.06c.39.39 1.02.39 1.41 0l4.59-4.59a.996.996 0 0 0 0-1.41L7.73 1.73zM2.38 7.09c-.31-.3-.47-.7-.47-1.13V3.5c0-.88.72-1.59 1.59-1.59h2.47c.42 0 .83.16 1.13.47l6.14 6.13-4.73 4.73-6.13-6.15zM3.01 3h2v2H3V3h.01z"/></svg>
      </span>
      <img alt="@jariketting" class="avatar" height="16" src="https://avatars2.githubusercontent.com/u/15982332?v=4&amp;s=32" width="16" />
      <a href="/jariketting" class="author">jariketting</a>
      
      
       added <span class="label-color" style="background-color: #84b6eb;" title="by jariketting at 2017-07-18 14:08:43"><a href="/cruisereizen/cruisereizen/labels/enhancement" style="color: #1c2733">enhancement</a></span> <span class="label-color" style="background-color: #128A0C;" title="by jariketting at 2017-07-18 14:08:43"><a href="/cruisereizen/cruisereizen/labels/Frontend" style="color: #fff">Frontend</a></span>
      labels
      <a href="#event-1168207930" class="timestamp"><relative-time class="timestamp" datetime="2017-07-18T12:08:43Z">Jul 18, 2017</relative-time></a>
    </h3>
  </div>








<!-- Rendered timeline since 2017-07-18 05:08:43 -->
<div id="partial-timeline-marker"
      class="js-timeline-marker js-socket-channel js-updatable-content"
      data-channel="pull_request:131053699"
      data-url="/cruisereizen/cruisereizen/pull/979/show_partial?partial=pull_requests%2Ftimeline_marker&amp;since=1500379723"
      data-last-modified="Tue, 18 Jul 2017 12:08:43 GMT">

    <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/notifications/mark?ids=241997800" class="d-none js-timeline-marker-form" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="Lern6fSRRyspcQ03hbMd7suT4V7Lq18JD4BtlPuxuxfDYYamDwSdTYIeGSELcKEagAe8StvadBfA2NTtVC6Z6A==" /></div>
</form></div>


  </div>

  <div class="discussion-timeline-actions">
        

<div id="partial-pull-merging" class="pull-merging js-pull-merging js-socket-channel js-updatable-content"
     data-channel="repo:73371264:branch:feature/lazyload repo:73371264:branch:develop repo:73371264:commit:719a3e2530213071eec9d579332af8fa1dcb4b6f issue:243670920:state"
     data-url="/cruisereizen/cruisereizen/pull/979/show_partial?merge_type=merge&amp;partial=pull_requests%2Fmerging">


    
  <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/pull/979/cleanup" class="branch-action branch-action-state-merged js-immediate-updates js-handle-pull-merging-errors" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="dCkfXSuC5XShLKZ/+77HxFR2ukpMp09taipeeBGBwz2KVBX5XbeIHJ1369c4Lv9QY8bmRlQqCEvV4PhbBfJ6tg==" /></div>
    <span class="branch-action-icon">
      <svg aria-hidden="true" class="octicon octicon-git-merge" height="32" version="1.1" viewBox="0 0 12 16" width="24"><path fill-rule="evenodd" d="M10 7c-.73 0-1.38.41-1.73 1.02V8C7.22 7.98 6 7.64 5.14 6.98c-.75-.58-1.5-1.61-1.89-2.44A1.993 1.993 0 0 0 2 .99C.89.99 0 1.89 0 3a2 2 0 0 0 1 1.72v6.56c-.59.35-1 .99-1 1.72 0 1.11.89 2 2 2a1.993 1.993 0 0 0 1-3.72V7.67c.67.7 1.44 1.27 2.3 1.69.86.42 2.03.63 2.97.64v-.02c.36.61 1 1.02 1.73 1.02 1.11 0 2-.89 2-2 0-1.11-.89-2-2-2zm-6.8 6c0 .66-.55 1.2-1.2 1.2-.65 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm8 6c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
    </span>
    <div class="branch-action-body">
      <div class="post-merge-message">
        <button class="btn float-right" type="submit" data-disable-with>
          Delete branch
        </button>
        <div class="js-details-container Details">
          <h4 class="merge-branch-heading">Pull request successfully merged and closed</h4>
          <p class="merge-branch-description">
            You’re all set&mdash;the <span class="commit-ref css-truncate user-select-containhead-ref" title="cruisereizen/cruisereizen:feature/lazyload"><span class="css-truncate-target">feature/lazyload</span></span> branch can be safely deleted.
          </p>
        </div>
      </div>
    </div>
</form>


  

<div class="branch-action branch-action-state-error pull-merging-error js-pull-merging-error">
  <span class="branch-action-icon">
    <svg aria-hidden="true" class="octicon octicon-git-merge" height="32" version="1.1" viewBox="0 0 12 16" width="24"><path fill-rule="evenodd" d="M10 7c-.73 0-1.38.41-1.73 1.02V8C7.22 7.98 6 7.64 5.14 6.98c-.75-.58-1.5-1.61-1.89-2.44A1.993 1.993 0 0 0 2 .99C.89.99 0 1.89 0 3a2 2 0 0 0 1 1.72v6.56c-.59.35-1 .99-1 1.72 0 1.11.89 2 2 2a1.993 1.993 0 0 0 1-3.72V7.67c.67.7 1.44 1.27 2.3 1.69.86.42 2.03.63 2.97.64v-.02c.36.61 1 1.02 1.73 1.02 1.11 0 2-.89 2-2 0-1.11-.89-2-2-2zm-6.8 6c0 .66-.55 1.2-1.2 1.2-.65 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm8 6c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
  </span>
  <div class="branch-action-body" style="padding:15px">
    <button class="btn float-right js-pull-merging-refresh" type="button">
      <svg aria-hidden="true" class="octicon octicon-sync" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M10.24 7.4a4.15 4.15 0 0 1-1.2 3.6 4.346 4.346 0 0 1-5.41.54L4.8 10.4.5 9.8l.6 4.2 1.31-1.26c2.36 1.74 5.7 1.57 7.84-.54a5.876 5.876 0 0 0 1.74-4.46l-1.75-.34zM2.96 5a4.346 4.346 0 0 1 5.41-.54L7.2 5.6l4.3.6-.6-4.2-1.31 1.26c-2.36-1.74-5.7-1.57-7.85.54C.5 5.03-.06 6.65.01 8.26l1.75.35A4.17 4.17 0 0 1 2.96 5z"/></svg>
      Try again
    </button>
    <h4 class="merge-branch-heading">Couldn’t update branch</h4>
    <p class="merge-branch-description">Oops, something went wrong.</p>
    
  </div>
</div>

</div>

        
<div class="timeline-comment-wrapper timeline-new-comment js-comment-container ">
  <a href="/HACKPLUSPLUS"><img alt="@HACKPLUSPLUS" class="timeline-comment-avatar" height="44" src="https://avatars0.githubusercontent.com/u/8722712?v=4&amp;s=88" width="44" /></a>

    <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/cruisereizen/cruisereizen/pull/979/comment" class="js-new-comment-form" data-remote="true" data-type="json" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="mJoGXS8wUcYHhwensFYSarId6ih9IKnzS9rshfboOKfjd5iykj2gLwT/pkd5gEibYPEwwo0hPjBst4T9ilqfdw==" /></div>
      <div class="timeline-comment">
        <input type="hidden" name="issue" value="979">
          <div class="js-suggester-container  js-previewable-comment-form previewable-comment-form write-selected" data-preview-url="/preview?markdown_unsupported=false&amp;repository=73371264&amp;subject=979&amp;subject_type=PullRequest" data-preview-authenticity-token="h8ZzAALIk6I1Nl3B0ApFeDkvGtoa7tdRS/fSJ1Djq+bqHTh4QLR13JkQ2DTZNK4JmfM5BlbPGxJlWNI/RWAVYA==">
  <div class="comment-form-head tabnav">
      <div class="js-toolbar toolbar-commenting">
  <div class="toolbar-group">
    <div class="toolbar-item dropdown js-menu-container">
      <button type="button" tabindex="-1" class="js-menu-target menu-target tooltipped tooltipped-n" aria-label="Add header text" aria-expanded="false" aria-haspopup="true">
        <svg aria-hidden="true" class="octicon octicon-text-size" height="16" version="1.1" viewBox="0 0 18 16" width="18"><path fill-rule="evenodd" d="M13.62 9.08L12.1 3.66h-.06l-1.5 5.42h3.08zM5.7 10.13S4.68 6.52 4.53 6.02h-.08l-1.13 4.11H5.7zM17.31 14h-2.25l-.95-3.25h-4.07L9.09 14H6.84l-.69-2.33H2.87L2.17 14H0l3.3-9.59h2.5l2.17 6.34L10.86 2h2.52l3.94 12h-.01z"/></svg>
        <span class="dropdown-caret"></span>
      </button>

      <div class="dropdown-menu-content js-menu-content">
        <ul class="dropdown-menu dropdown-menu-s">
          <button type="button" class="js-toolbar-item dropdown-item dropdown-header1" data-prefix="# " data-ga-click="Markdown Toolbar, click, header1">
            Header
          </button>
          <button type="button" class="js-toolbar-item dropdown-item dropdown-header2" data-prefix="## " data-ga-click="Markdown Toolbar, click, header2">
            Header
          </button>
          <button type="button" class="js-toolbar-item dropdown-item dropdown-header3" data-prefix="### " data-ga-click="Markdown Toolbar, click, header3">
            Header
          </button>
        </ul>
      </div>
    </div>

    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add bold text <ctrl+b>" data-prefix="**" data-suffix="**" data-toolbar-hotkey="b" data-ga-click="Markdown Toolbar, click, bold" data-trim-first>
      <svg aria-hidden="true" class="octicon octicon-bold" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path fill-rule="evenodd" d="M1 2h3.83c2.48 0 4.3.75 4.3 2.95 0 1.14-.63 2.23-1.67 2.61v.06c1.33.3 2.3 1.23 2.3 2.86 0 2.39-1.97 3.52-4.61 3.52H1V2zm3.66 4.95c1.67 0 2.38-.66 2.38-1.69 0-1.17-.78-1.61-2.34-1.61H3.13v3.3h1.53zm.27 5.39c1.77 0 2.75-.64 2.75-1.98 0-1.27-.95-1.81-2.75-1.81h-1.8v3.8h1.8v-.01z"/></svg>
    </button>

    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add italic text <ctrl+i>" data-prefix="_" data-suffix="_" data-toolbar-hotkey="i" data-ga-click="Markdown Toolbar, click, italic" data-trim-first>
      <svg aria-hidden="true" class="octicon octicon-italic" height="16" version="1.1" viewBox="0 0 6 16" width="6"><path fill-rule="evenodd" d="M2.81 5h1.98L3 14H1l1.81-9zm.36-2.7c0-.7.58-1.3 1.33-1.3.56 0 1.13.38 1.13 1.03 0 .75-.59 1.3-1.33 1.3-.58 0-1.13-.38-1.13-1.03z"/></svg>
    </button>
  </div>

  <div class="toolbar-group">
    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Insert a quote" data-prefix="> " data-multiline="true" data-ga-click="Markdown Toolbar, click, quote" data-surround-with-newlines>
      <svg aria-hidden="true" class="octicon octicon-quote" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M6.16 3.5C3.73 5.06 2.55 6.67 2.55 9.36c.16-.05.3-.05.44-.05 1.27 0 2.5.86 2.5 2.41 0 1.61-1.03 2.61-2.5 2.61-1.9 0-2.99-1.52-2.99-4.25 0-3.8 1.75-6.53 5.02-8.42L6.16 3.5zm7 0c-2.43 1.56-3.61 3.17-3.61 5.86.16-.05.3-.05.44-.05 1.27 0 2.5.86 2.5 2.41 0 1.61-1.03 2.61-2.5 2.61-1.89 0-2.98-1.52-2.98-4.25 0-3.8 1.75-6.53 5.02-8.42l1.14 1.84h-.01z"/></svg>
    </button>

    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Insert code" data-prefix="`" data-suffix="`" data-block-prefix="```" data-block-suffix="```" data-ga-click="Markdown Toolbar, click, code">
      <svg aria-hidden="true" class="octicon octicon-code" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"/></svg>
    </button>

    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add a link <ctrl+k>" data-prefix="[" data-suffix="](url)" data-replace-next="url" data-toolbar-hotkey="k" data-scan-for="https?://" data-ga-click="Markdown Toolbar, click, link">
      <svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"/></svg>
    </button>
  </div>

  <div class="toolbar-group">
    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add a bulleted list" data-multiline="true" data-prefix="- " data-multiline="true" data-ga-click="Markdown Toolbar, click, unordered list" data-surround-with-newlines>
      <svg aria-hidden="true" class="octicon octicon-list-unordered" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M2 13c0 .59 0 1-.59 1H.59C0 14 0 13.59 0 13c0-.59 0-1 .59-1h.81c.59 0 .59.41.59 1H2zm2.59-9h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1H4.59C4 2 4 2.41 4 3c0 .59 0 1 .59 1zM1.41 7H.59C0 7 0 7.41 0 8c0 .59 0 1 .59 1h.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01zm0-5H.59C0 2 0 2.41 0 3c0 .59 0 1 .59 1h.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01zm10 5H4.59C4 7 4 7.41 4 8c0 .59 0 1 .59 1h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01zm0 5H4.59C4 12 4 12.41 4 13c0 .59 0 1 .59 1h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01z"/></svg>
    </button>
    <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add a numbered list" data-prefix="1. " data-multiline="true" data-ga-click="Markdown Toolbar, click, ordered list" data-ordered-list>
      <svg aria-hidden="true" class="octicon octicon-list-ordered" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 13c0 .59 0 1-.59 1H4.59C4 14 4 13.59 4 13c0-.59 0-1 .59-1h6.81c.59 0 .59.41.59 1H12zM4.59 4h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1H4.59C4 2 4 2.41 4 3c0 .59 0 1 .59 1zm6.81 3H4.59C4 7 4 7.41 4 8c0 .59 0 1 .59 1h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1zM2 1h-.72c-.3.19-.58.25-1.03.34V2H1v2.14H.16V5H3v-.86H2V1zm.25 8.13c-.17 0-.45.03-.66.06.53-.56 1.14-1.25 1.14-1.89C2.71 6.52 2.17 6 1.37 6c-.59 0-.97.2-1.38.64l.58.58c.19-.19.38-.38.64-.38.28 0 .48.16.48.52 0 .53-.77 1.2-1.7 2.06V10h3l-.09-.88h-.66l.01.01zm-.08 3.78v-.03c.44-.19.64-.47.64-.86 0-.7-.56-1.11-1.44-1.11-.48 0-.89.19-1.28.52l.55.64c.25-.2.44-.31.69-.31.27 0 .42.13.42.36 0 .27-.2.44-.86.44v.75c.83 0 .98.17.98.47 0 .25-.23.38-.58.38-.28 0-.56-.14-.81-.38l-.48.66c.3.36.77.56 1.41.56.83 0 1.53-.41 1.53-1.16 0-.5-.31-.81-.77-.94v.01z"/></svg>
    </button>

      <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add a task list" data-prefix="- [ ] " data-toolbar-hotkey="L" data-multiline data-ga-click="Markdown Toolbar, click, task list" data-surround-with-newlines>
        <svg aria-hidden="true" class="octicon octicon-tasklist" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M15.41 9H7.59C7 9 7 8.59 7 8c0-.59 0-1 .59-1h7.81c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zM9.59 4C9 4 9 3.59 9 3c0-.59 0-1 .59-1h5.81c.59 0 .59.41.59 1 0 .59 0 1-.59 1H9.59zM0 3.91l1.41-1.3L3 4.2 7.09 0 8.5 1.41 3 6.91l-3-3zM7.59 12h7.81c.59 0 .59.41.59 1 0 .59 0 1-.59 1H7.59C7 14 7 13.59 7 13c0-.59 0-1 .59-1z"/></svg>
      </button>
  </div>

  <div class="toolbar-group">
      <div class="toolbar-item select-menu select-menu-modal-right js-menu-container js-select-menu js-load-contents js-saved-reply-container"
          data-contents-url="/settings/replies?context=pull_request_comment">
        <button type="button" tabindex="-1" class="js-menu-target menu-target tooltipped tooltipped-nw"
           aria-label="Insert a saved reply" aria-expanded="false" aria-haspopup="true" data-ga-click="Markdown Toolbar, click, saved reply">
          <svg aria-hidden="true" class="octicon octicon-reply" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M6 3.5c3.92.44 8 3.125 8 10-2.312-5.062-4.75-6-8-6V11L.5 5.5 6 0v3.5z"/></svg>
          <span class="dropdown-caret"></span>
        </button>

        <div class="select-menu-modal-holder js-menu-content js-navigation-container">
          <div class="select-menu-modal">
            <div class="select-menu-header">
              <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
              <span class="select-menu-title">Select a saved reply</span>
            </div>
            <div class="js-select-menu-deferred-content"></div>
            <div class="select-menu-loading-overlay anim-pulse">
              <svg aria-hidden="true" class="octicon octicon-octoface" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M14.7 5.34c.13-.32.55-1.59-.13-3.31 0 0-1.05-.33-3.44 1.3-1-.28-2.07-.32-3.13-.32s-2.13.04-3.13.32c-2.39-1.64-3.44-1.3-3.44-1.3-.68 1.72-.26 2.99-.13 3.31C.49 6.21 0 7.33 0 8.69 0 13.84 3.33 15 7.98 15S16 13.84 16 8.69c0-1.36-.49-2.48-1.3-3.35zM8 14.02c-3.3 0-5.98-.15-5.98-3.35 0-.76.38-1.48 1.02-2.07 1.07-.98 2.9-.46 4.96-.46 2.07 0 3.88-.52 4.96.46.65.59 1.02 1.3 1.02 2.07 0 3.19-2.68 3.35-5.98 3.35zM5.49 9.01c-.66 0-1.2.8-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.54-1.78-1.2-1.78zm5.02 0c-.66 0-1.2.79-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.53-1.78-1.2-1.78z"/></svg>
            </div>
          </div>
        </div>
      </div>

      <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-nw" aria-label="Directly mention a user or team" data-prefix="@" data-prefix-space data-ga-click="Markdown Toolbar, click, mention">
        <svg aria-hidden="true" class="octicon octicon-mention" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M6.58 15c1.25 0 2.52-.31 3.56-.94l-.42-.94c-.84.52-1.89.83-3.03.83-3.23 0-5.64-2.08-5.64-5.72 0-4.37 3.23-7.18 6.58-7.18 3.45 0 5.22 2.19 5.22 5.2 0 2.39-1.34 3.86-2.5 3.86-1.05 0-1.36-.73-1.05-2.19l.73-3.75H8.98l-.11.72c-.41-.63-.94-.83-1.56-.83-2.19 0-3.66 2.39-3.66 4.38 0 1.67.94 2.61 2.3 2.61.84 0 1.67-.53 2.3-1.25.11.94.94 1.45 1.98 1.45 1.67 0 3.77-1.67 3.77-5C14 2.61 11.59 0 7.83 0 3.66 0 0 3.33 0 8.33 0 12.71 2.92 15 6.58 15zm-.31-5c-.73 0-1.36-.52-1.36-1.67 0-1.45.94-3.22 2.41-3.22.52 0 .84.2 1.25.83l-.52 3.02c-.63.73-1.25 1.05-1.78 1.05V10z"/></svg>
      </button>

      <button type="button" tabindex="-1" class="js-toolbar-item toolbar-item tooltipped tooltipped-nw" aria-label="Reference an issue or pull request" data-prefix="#" data-prefix-space data-ga-click="Markdown Toolbar, click, reference">
        <svg aria-hidden="true" class="octicon octicon-bookmark" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path fill-rule="evenodd" d="M9 0H1C.27 0 0 .27 0 1v15l5-3.09L10 16V1c0-.73-.27-1-1-1zm-.78 4.25L6.36 5.61l.72 2.16c.06.22-.02.28-.2.17L5 6.6 3.12 7.94c-.19.11-.25.05-.2-.17l.72-2.16-1.86-1.36c-.17-.16-.14-.23.09-.23l2.3-.03.7-2.16h.25l.7 2.16 2.3.03c.23 0 .27.08.09.23h.01z"/></svg>
      </button>
  </div>
</div>

      <nav class="tabnav-tabs" role="tablist">
        <button type="button" class="btn-link tabnav-tab write-tab js-write-tab selected " role="tab" aria-selected="true">Write</button>
        <button type="button" class="btn-link tabnav-tab preview-tab js-preview-tab " role="tab">Preview</button>
      </nav>
  </div>


  <div class="comment-form-error js-comment-form-error" style="display:none">    There was an error creating your PullRequest.
</div>
  <div class="write-content js-write-bucket js-uploadable-container js-upload-markdown-image is-default upload-enabled"
      data-upload-policy-url="/upload/policies/assets" data-upload-policy-authenticity-token="pF/6CqUxbGKEz/FroM+4Nmiw3o2VEsz8zaoyTlG3+CWtm5Ml0U76IQDpf7S0GKTvW/nTTcY7bF4eFDaQ54DEWg=="
        data-upload-repository-id="73371264"
      >

    <input type="hidden" name="saved_reply_id" class="js-saved-reply-id js-resettable-field" value="" data-reset-value="">

    <textarea name="comment[body]"
              id="new_comment_field"
              
              placeholder="Leave a comment"
              aria-label="Comment body"
              class="form-control input-contrast comment-form-textarea js-comment-field js-improved-comment-field js-task-list-field js-quick-submit js-size-to-fit js-suggester-field js-quote-selection-target js-session-resumable"
              ></textarea>

        <p class="drag-and-drop position-relative">
    <span class="default">
        Attach files by dragging &amp; dropping,
        <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser" aria-label="Attach files to your comment">
        <span class="btn-link manual-file-chooser-text">selecting them</span>, or pasting
        from the clipboard.
    </span>
    <span class="loading">
      <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" /> Uploading your files…
    </span>
    <span class="error bad-file">
      We don’t support that file type.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a
        PNG, GIF, JPG, DOCX, PPTX, XLSX, TXT, PDF, or ZIP.
      </span>
    </span>
    <span class="error bad-permissions">
      Attaching documents requires write permission to this repository.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a PNG, GIF, or JPG.
      </span>
    </span>
    <span class="error repository-required">
      We don’t support that file type.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a PNG, GIF, or JPG.
      </span>
    </span>
    <span class="error too-big">
      Yowza, that’s a big file.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a file smaller than 10MB.
      </span>
    </span>
    <span class="error empty">
      This file is empty.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again</button> with a file that’s not empty.
      </span>
    </span>
    <span class="error hidden-file">
      This file is hidden.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again</button> with another file.
      </span>
    </span>
    <span class="error failed-request">
      Something went really wrong, and we can’t process that file.
      <input type="file" multiple="multiple" class="manual-file-chooser top-0 right-0 bottom-0 left-0 width-full ml-0 js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button type="button" class="btn-link manual-file-chooser-text">Try again.</button>
      </span>
    </span>
  </p>


    <div class="suggester-container">
      <div class="suggester js-suggester js-navigation-container"
           data-url="/suggestions/pull_request/131053699?repository=cruisereizen&amp;user_id=cruisereizen"
           data-log-mention-url="/suggestions/log_mention?repository=cruisereizen&amp;user_id=cruisereizen"
           data-log-mention-authenticity-token="dUJMY7PF6R7VI4rVv39NZYc37GWVTw3yz1Fhb4k9Qz6t1nyoXFECOalpFtNREYz/GxAHIouE7iiigtTw/lFf6w=="
           >
      </div>
    </div>
  </div>

  <div class="preview-content">
    <div class="comment">
  <div class="comment-body markdown-body js-preview-body">
    <p>Nothing to preview</p>
  </div>
</div>

  </div>

  <div class="float-left">
      <a class="tabnav-extra" href="https://guides.github.com/features/mastering-markdown/" target="_blank" data-ga-click="Markdown Toolbar, click, help">
        <svg aria-hidden="true" class="octicon octicon-markdown v-align-bottom" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M14.85 3H1.15C.52 3 0 3.52 0 4.15v7.69C0 12.48.52 13 1.15 13h13.69c.64 0 1.15-.52 1.15-1.15v-7.7C16 3.52 15.48 3 14.85 3zM9 11H7V8L5.5 9.92 4 8v3H2V5h2l1.5 2L7 5h2v6zm2.99.5L9.5 8H11V5h2v3h1.5l-2.51 3.5z"/></svg>
        Styling with Markdown is supported
      </a>
  </div>


  <div class="comment-form-error comment-form-bottom js-comment-update-error"></div>
</div>

          <div class="form-actions">
            <div id="partial-new-comment-form-actions"
      class="js-socket-channel js-updatable-content"
      data-channel="issue:243670920:state"
        data-url="/cruisereizen/cruisereizen/pull/979/show_partial?partial=pull_requests%2Fform_actions"
  >

  <button type="submit" class="btn btn-primary" data-disable-with data-disable-invalid>
    Comment
  </button>

    
</div>

          </div>
      </div>
</form>
    <div class="protip">
      <svg aria-hidden="true" class="octicon octicon-light-bulb text-gray" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M6.5 0C3.48 0 1 2.19 1 5c0 .92.55 2.25 1 3 1.34 2.25 1.78 2.78 2 4v1h5v-1c.22-1.22.66-1.75 2-4 .45-.75 1-2.08 1-3 0-2.81-2.48-5-5.5-5zm3.64 7.48c-.25.44-.47.8-.67 1.11-.86 1.41-1.25 2.06-1.45 3.23-.02.05-.02.11-.02.17H5c0-.06 0-.13-.02-.17-.2-1.17-.59-1.83-1.45-3.23-.2-.31-.42-.67-.67-1.11C2.44 6.78 2 5.65 2 5c0-2.2 2.02-4 4.5-4 1.22 0 2.36.42 3.22 1.19C10.55 2.94 11 3.94 11 5c0 .66-.44 1.78-.86 2.48zM4 14h5c-.23 1.14-1.3 2-2.5 2s-2.27-.86-2.5-2z"/></svg>
      <strong>ProTip!</strong>
      Add <a href='/cruisereizen/cruisereizen/pull/979.patch' data-skip-pjax>.patch</a> or <a href='/cruisereizen/cruisereizen/pull/979.diff' data-skip-pjax>.diff</a> to the end of URLs for Git’s plaintext views.
    </div>
</div>


  </div>
</div>

    </div>
  </div>

  </div>

  </div>
  <div class="modal-backdrop js-touch-events"></div>
</div>

    </div>
  </div>

  </div>

      
<div class="container-lg site-footer-container">
  <div class="site-footer " role="contentinfo">
    <ul class="site-footer-links float-right">
        <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact GitHub</a></li>
      <li><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>

    </ul>

    <a href="https://github.com" aria-label="Homepage" class="site-footer-mark" title="GitHub">
      <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>
</a>
    <ul class="site-footer-links">
      <li>&copy; 2017 <span title="1.01949s from unicorn-1144374575-5sncb">GitHub</span>, Inc.</li>
        <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
        <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>
    </ul>
  </div>
</div>



  <div id="ajax-error-message" class="ajax-error-message flash flash-error">
    <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg>
    <button type="button" class="flash-close js-flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
    </button>
    You can't perform that action at this time.
  </div>


    
    <script crossorigin="anonymous" integrity="sha256-OiTVyGEpRWTLRqro9+PHTHqtjluGGBa/2WknMA8gP1E=" src="https://assets-cdn.github.com/assets/frameworks-3a24d5c861294564cb46aae8f7e3c74c7aad8e5b861816bfd96927300f203f51.js"></script>
    
    <script async="async" crossorigin="anonymous" integrity="sha256-rqAbxLf6NmR5cyiXvz3tl4qtgfEoO2MN429FzfhhyKE=" src="https://assets-cdn.github.com/assets/github-aea01bc4b7fa366479732897bf3ded978aad81f1283b630de36f45cdf861c8a1.js"></script>
    
    
    
    
  <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner d-none">
    <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg>
    <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
    <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
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
</html>


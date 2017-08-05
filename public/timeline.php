<?php
    include 'html_header.php';
    include 'html_header_wrapper.php';
?>

  <div id="start-of-content" class="show-on-focus"></div>
    <div id="js-flash-container"></div>
  <div role="main">
        <div itemscope itemtype="http://schema.org/SoftwareSourceCode">
    <div id="js-repo-pjax-container" data-pjax-container>






    
        <?php    include 'html_page_head.php'; ?>

<div class="container new-discussion-timeline experiment-repo-nav">
  <div class="repository-content">


  <div class="issues-listing" data-pjax>




  <div class="clearfix js-issues-results">

  
      <?php include 'html_partial_discussion_header.php'; ?>


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
      
<?php             include 'html_discussion_sidebar.php'; ?>
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

<?php include 'html_timeline_comment_wrapper.php'; ?>
<?php include 'html_protip.php'; ?>
<?php             include 'html_repository_content.php'; ?>
<?php include 'html_pricing_setup.php'; ?>
<?php             include 'html_replies.php'; ?>

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

    <div class="bg-blue py-3 mt-6 text-white" style="margin-bottom:-30px;">
  <div class="container">
    <div class="row clearfix" style="width: 100%;">
      <div class="col-xs-12 col-12 col-md-6 py-3 d-xs-block">
        <div class="text-gamma pt-1 mb-0 text-white">Never miss an update!</div>
        <p class="mb-0 text-small" style="color: rgba(255,255,255,.7);">Join the newsletter to be informed of every new update.</p>
      </div>
      <div class="col-xs-12 col-12 col-md-6 py-3 text-right d-xs-block">

        <div id="mc_embed_signup">

          <form action="//github.us11.list-manage.com/subscribe/post?u=9d7ced8c4bbd6c2f238673f0f&amp;id=7d9164de9f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mt-md-2" target="_blank" novalidate="novalidate">

            <div class="row clearfix gut-3">
              <div class="col-12 col-md-8">
                <div class="mc-field-group mb-3 mb-md-3">
                  <input type="email" value="" name="EMAIL" class="required email form-control d-block" id="mce-EMAIL" placeholder="Your email" style="height: 42px; width: 100%;" aria-required="true">
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="clear">
                  <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe" class="btn btn-blue ml-0 text-center btn-block d-block">
                </div>
              </div>
            </div>

            <div id="mce-responses" class="clear clearfix text-small" style="color: rgba(255,255,255,.7);">
              <div class="response mt-3" id="mce-error-response" style="display:none"></div>
              <div class="response mt-3" id="mce-success-response" style="display:none"></div>
            </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true">
              <input type="text" name="b_9d7ced8c4bbd6c2f238673f0f_7d9164de9f" tabindex="-1" value="">
            </div>

          </form>

        </div>
        <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>

      </div>
    </div>
  </div>
</div>
<?php include 'html_blank_slate.php'; ?>
<?php include 'html_pricing_setup.php'; ?>
<?php
include 'html_footer.php';
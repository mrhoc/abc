<?php 

add_role('user-only', 'User view only', get_role( 'editor' )->capabilities);

add_filter( 'admin_body_class', 'hide_from_subadmins' );
function hide_from_subadmins( $classes ) {
   if(current_user_can('user-only') ) {
      $classes = 'user-role-view';
   }
   return $classes;
}

add_action('admin_head', 'custom_view_role');
function custom_view_role() {
  echo '<style>
    .user-role-view .editor-post-publish-button__button, .user-role-view .save-row, .user-role-view .editor-post-trash,
    .user-role-view .trash, .user-role-view .save, .user-role-view #doaction, .user-role-view #doaction2, .user-role-view .page-title-action,
    .user-role-view .edit-post-post-visibility,
    .user-role-view .editor-post-featured-image__container+button.is-secondary,
    .user-role-view .editor-post-featured-image__container~button.is-destructive,
    .user-role-view #permalink-manager-save-button, .user-role-view #publish, .user-role-view #delete-action,
    .user-role-view #publishing-action, .user-role-view #submitpost, .user-role-view input[name="wpcf7-save"]{
      display: none;
    }
    .user-role-view .editor-post-featured-image__container>button,
    .user-role-view .editor-post-featured-image__container+button.is-secondary,
    .user-role-view .editor-post-featured-image__container~button.is-destructive,
    .user-role-view input[name="wpcf7-save"] {
      cursor: not-allowed;
      pointer-events: none;
    }
  </style>';
}

?>
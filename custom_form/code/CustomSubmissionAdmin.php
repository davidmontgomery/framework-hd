<?php

class CustomSubmissionAdmin extends ModelAdmin {

  public static $managed_models = array(
      'CustomFormSubmission'
   );

  static $url_segment = 'customformsubmissions';
  static $menu_title = 'Custom Submissions';
}

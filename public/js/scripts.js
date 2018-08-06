/*
 * decaffeinate suggestions:
 * DS102: Remove unnecessary code created because of implicit returns
 * Full docs: https://github.com/decaffeinate/decaffeinate/blob/master/docs/suggestions.md
 */
$(function() {
  $("[title]").tooltip({
    container: "body"});
  $('#cleap .delete-event').on('ajax:complete', function() {
    return $(this).closest('.tile').hide("slow");
  });
  const show_clidebar = function() {
    $('#clidebar').hide().removeClass("visible-lg visible-md").slideDown('slow');
    return $('.hidden-clidebar').hide('quick');
  };
  const hide_clidebar = function() {
    $('#clidebar').slideUp({
      duration: 'slow',
      complete() { return $(this).addClass("visible-lg visible-md").show(); }
    });
    return $('.hidden-clidebar').show('quick');
  };
  $('#navbar-collapse').on('show.bs.collapse', () => show_clidebar());
  $('#navbar-collapse').on('hide.bs.collapse', () => hide_clidebar());
  $('#show-clidebar').click(function() {
    if ($('#clidebar').hasClass('visible-lg')) { return show_clidebar(); } else { return hide_clidebar(); }
  });
  $('.tile [data-link]').each((i,e) => $(e).closest('.tile').attr('data-link',$(e).attr('data-link')));
  $('.tile[data-link]').click(function() {
    return document.location = $(this).attr('data-link');
  });
  $('#show_weekend').click(function() {
    $('.monday,.tuesday').hide();
    $('.weekend').show();
    $('#show_weekend').hide();
    return $('#hide_weekend').show();
  });
  $('#hide_weekend').click(function() {
    $('.monday,.tuesday').show();
    $('.weekend').hide();
    $('#show_weekend').show();
    return $('#hide_weekend').hide();
  });
  $('#tutorgroup_id').change(() => document.location = $('#tutorgroup_id').val());
  $('[data-row-hide]').click(function() {
    return $($(this).attr('data-row-hide')).toggleClass("visible-lg");
  });
  $('#course-home-tabs a').on('shown.bs.tab', e => $.cookie("course-home-tabs",$(e.target).attr('href'), {expires: 365}));
  $(`#course-home-tabs a[href=${$.cookie('course-home-tabs')}]`).tab('show');
  if ($('[data-course-person-filter=active]').length === 1) {
    filterCourseList("active");
  }
  $('[data-course-person-filter]').click(function() {
    return filterCourseList($(this).attr('data-course-person-filter'));
  });
  return $('[data-download-table]').click(function() {
    return $($(this).attr('data-download-table')).tableExport({
      type: $(this).attr('data-download-type'),
      escape: $(this).attr('data-download-escape') || false,
      htmlContent: true
    });
  });
});

var filterCourseList = function(status) {
    $("[data-course-person-filter]").removeClass("active");
    $(`[data-course-person-filter=${status}]`).addClass("active");
    if (status === "show-all") {
      return $("[data-mis-status]").show();
    } else {
      $(`[data-mis-status]:not([data-mis-status=${status}])`).hide();
      return $(`[data-mis-status=${status}]`).show();
    }
  };


$(document).ready(function() {
$(".intro-header").editable(function(value, settings) {
  var submitdata = {
  "id": $("body").attr("class"),
  "columnname": $(this).attr("class"),
  "value": value,
  };
  $.post("website/editSite", submitdata);
  return value;
  }, {
  });
$(".intro-text").editable(function(value, settings) {
  var submitdata = {
  "id": $("body").attr("class"),
  "columnname": $(this).attr("class"),
  "value": value
  };
  $.post("website/editSite", submitdata);
  return value;
  }, {
  "type": "textarea",
  "height": "100px",
  "submit": "OK"
  });
$(".intro-content").editable(function(value, settings) {
  var submitdata = {
  "id": $("body").attr("class"),
  "columnname": $(this).attr("class"),
  "value": value
  };
  $.post("website/editSite", submitdata);
  return value;
  }, {
  "type": "textarea",
  "height": "100px",
  "submit": "OK"
  });
$(".nav li a").editable(function(value, settings) {
  var submitdata = {
  "id": $(this).attr("id"),
  "value": value
  };
  $.post("website/editNav", submitdata);
  return value;
  }, {
  "type": "text",
  "submit": "OK"
  });
$("section .header").editable(function(value, settings) {
  var submitdata = {
  "id": $(this).attr("id"),
  "columnname": $(this).attr("class"),
  "value": value
  };
  $.post("website/editSections", submitdata);
  return value;
  }, {
  "type": "textarea",
  "submit": "OK"
  });
$("section .text").editable(function(value, settings) {
  var submitdata = {
  "id": $(this).attr("id"),
  "columnname": $(this).attr("class"),
  "value": value
  };
  $.post("website/editSections", submitdata);
  return value;
  }, {
  "type": "textarea",
  "submit": "OK"
  });
$("section .extras").editable(function(value, settings) {
  var submitdata = {
  "id": $(this).attr("id"),
  "columnname": $(this).attr("class"),
  "value": value
  };
  $.post("website/editSections", submitdata);
  return value;
  }, {
  "type": "textarea",
  "submit": "OK"
  });

});


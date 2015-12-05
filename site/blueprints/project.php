<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: true
files:
  sortable: true
fields:
  title:
    label: Title
    type: title
  bgcolour:
    label: Background colour
    type: text
    placeholder: Enter a hex value
    width: 1/4    
  lede:
    label: Lede
    type: text
  summary:
    label: Summary
    type: text    
  role:
    label: Role
    type: checkboxes
    options:
      Visual Design: Visual design
      Branding: Branding
      UX: User Experience
      Front-End: Front-end development
      Integration: Back-end integration
      Consulting: Consulting
  with:
    label: With
    type: checkboxes
    options:
      Clearleft: Clearleft
      Freelance: Freelance
  year:
    label: Year
    placeholder: The year the project was finished…
    type: text
    width: 1/2
  website:
    label: Website
    type: url
    width: 1/2
  text:
    label: Text
    type: textarea     
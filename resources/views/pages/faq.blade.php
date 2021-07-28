@extends('layouts.pages_master')
@section('styles')
<style>
    /*
    Copyright (c) 2011 Milena B Brandao (milenabbrandao@gmail.com), with Reserved Font Name "Fredoka"

    This Font Software is licensed under the SIL Open Font License, Version 1.1.
    This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

    —————————————————————————————-
    SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
    —————————————————————————————-
    */
    /* latin */
    @font-face {
        font-family: 'Fredoka One';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://img1.wsimg.com/gfonts/s/fredokaone/v8/k3kUo8kEI-tA1RRcTZGmTlHGCac.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /*
    Copyright 2014-2017 Indian Type Foundry (info@indiantypefoundry.com)

    This Font Software is licensed under the SIL Open Font License, Version 1.1.
    This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

    —————————————————————————————-
    SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
    —————————————————————————————-
    */
    /* devanagari */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: url(https://img1.wsimg.com/gfonts/s/poppins/v15/pxiByp8kv8JHgFVrLDz8Z11lFc-K.woff2) format('woff2');
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: url(https://img1.wsimg.com/gfonts/s/poppins/v15/pxiByp8kv8JHgFVrLDz8Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: url(https://img1.wsimg.com/gfonts/s/poppins/v15/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* devanagari */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://img1.wsimg.com/gfonts/s/poppins/v15/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://img1.wsimg.com/gfonts/s/poppins/v15/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://img1.wsimg.com/gfonts/s/poppins/v15/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* devanagari */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://img1.wsimg.com/gfonts/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z11lFc-K.woff2) format('woff2');
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://img1.wsimg.com/gfonts/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://img1.wsimg.com/gfonts/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* devanagari */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://img1.wsimg.com/gfonts/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z11lFc-K.woff2) format('woff2');
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://img1.wsimg.com/gfonts/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://img1.wsimg.com/gfonts/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
</style>
<style>
    .x {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        margin: 0;
        box-sizing: border-box
    }

    .x *,
    .x :after,
    .x :before {
        box-sizing: inherit
    }

    .x-el a[href^="mailto:"]:not(.x-el),
    .x-el a[href^="tel:"]:not(.x-el) {
        color: inherit;
        font-size: inherit;
        text-decoration: inherit
    }

    .x-el-article,
    .x-el-aside,
    .x-el-details,
    .x-el-figcaption,
    .x-el-figure,
    .x-el-footer,
    .x-el-header,
    .x-el-hgroup,
    .x-el-main,
    .x-el-menu,
    .x-el-nav,
    .x-el-section,
    .x-el-summary {
        display: block
    }

    .x-el-audio,
    .x-el-canvas,
    .x-el-progress,
    .x-el-video {
        display: inline-block;
        vertical-align: baseline
    }

    .x-el-audio:not([controls]) {
        display: none;
        height: 0
    }

    .x-el-template {
        display: none
    }

    .x-el-a {
        background-color: transparent;
        color: inherit
    }

    .x-el-a:active,
    .x-el-a:hover {
        outline: 0
    }

    .x-el-abbr[title] {
        border-bottom: 1px dotted
    }

    .x-el-b,
    .x-el-strong {
        font-weight: 700
    }

    .x-el-dfn {
        font-style: italic
    }

    .x-el-mark {
        background: #ff0;
        color: #000
    }

    .x-el-small {
        font-size: 80%
    }

    .x-el-sub,
    .x-el-sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline
    }

    .x-el-sup {
        top: -.5em
    }

    .x-el-sub {
        bottom: -.25em
    }

    .x-el-img {
        vertical-align: middle;
        border: 0
    }

    .x-el-svg:not(:root) {
        overflow: hidden
    }

    .x-el-figure {
        margin: 0
    }

    .x-el-hr {
        box-sizing: content-box;
        height: 0
    }

    .x-el-pre {
        overflow: auto
    }

    .x-el-code,
    .x-el-kbd,
    .x-el-pre,
    .x-el-samp {
        font-family: monospace, monospace;
        font-size: 1em
    }

    .x-el-button,
    .x-el-input,
    .x-el-optgroup,
    .x-el-select,
    .x-el-textarea {
        color: inherit;
        font: inherit;
        margin: 0
    }

    .x-el-button {
        overflow: visible
    }

    .x-el-button,
    .x-el-select {
        text-transform: none
    }

    .x-el-button,
    .x-el-input[type=button],
    .x-el-input[type=reset],
    .x-el-input[type=submit] {
        -webkit-appearance: button;
        cursor: pointer
    }

    .x-el-button[disabled],
    .x-el-input[disabled] {
        cursor: default
    }

    .x-el-button::-moz-focus-inner,
    .x-el-input::-moz-focus-inner {
        border: 0;
        padding: 0
    }

    .x-el-input {
        line-height: normal
    }

    .x-el-input[type=checkbox],
    .x-el-input[type=radio] {
        box-sizing: border-box;
        padding: 0
    }

    .x-el-input[type=number]::-webkit-inner-spin-button,
    .x-el-input[type=number]::-webkit-outer-spin-button {
        height: auto
    }

    .x-el-input[type=search] {
        -webkit-appearance: textfield;
        box-sizing: content-box
    }

    .x-el-input[type=search]::-webkit-search-cancel-button,
    .x-el-input[type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    .x-el-textarea {
        border: 0
    }

    .x-el-fieldset {
        border: 1px solid silver;
        margin: 0 2px;
        padding: .35em .625em .75em
    }

    .x-el-legend {
        border: 0;
        padding: 0
    }

    .x-el-textarea {
        overflow: auto
    }

    .x-el-optgroup {
        font-weight: 700
    }

    .x-el-table {
        border-collapse: collapse;
        border-spacing: 0
    }

    .x-el-td,
    .x-el-th {
        padding: 0
    }

    .x {
        -webkit-font-smoothing: antialiased
    }

    .x-el-hr {
        border: 0
    }

    .x-el-fieldset,
    .x-el-input,
    .x-el-select,
    .x-el-textarea {
        margin-top: 0;
        margin-bottom: 0
    }

    .x-el-fieldset,
    .x-el-input[type=email],
    .x-el-input[type=text],
    .x-el-textarea {
        width: 100%
    }

    .x-el-label {
        vertical-align: middle
    }

    .x-el-input {
        border-style: none;
        padding: .5em;
        vertical-align: middle
    }

    .x-el-select:not([multiple]) {
        vertical-align: middle
    }

    .x-el-textarea {
        line-height: 1.75;
        padding: .5em
    }

    .x-el.d-none {
        display: none !important
    }

    .sideline-footer {
        margin-top: auto
    }

    @-webkit-keyframes loaderscale {
        0% {
            transform: scale(1);
            opacity: 1
        }

        45% {
            transform: scale(.1);
            opacity: .7
        }

        80% {
            transform: scale(1);
            opacity: 1
        }
    }

    @keyframes loaderscale {
        0% {
            transform: scale(1);
            opacity: 1
        }

        45% {
            transform: scale(.1);
            opacity: .7
        }

        80% {
            transform: scale(1);
            opacity: 1
        }
    }

    .x-loader svg {
        display: inline-block
    }

    .x-loader svg:first-child {
        -webkit-animation: loaderscale .75s cubic-bezier(.2, .68, .18, 1.08) -.24s infinite;
        animation: loaderscale .75s cubic-bezier(.2, .68, .18, 1.08) -.24s infinite
    }

    .x-loader svg:nth-child(2) {
        -webkit-animation: loaderscale .75s cubic-bezier(.2, .68, .18, 1.08) -.12s infinite;
        animation: loaderscale .75s cubic-bezier(.2, .68, .18, 1.08) -.12s infinite
    }

    .x-loader svg:nth-child(3) {
        -webkit-animation: loaderscale .75s cubic-bezier(.2, .68, .18, 1.08) 0s infinite;
        animation: loaderscale .75s cubic-bezier(.2, .68, .18, 1.08) 0s infinite
    }

    .x-icon>svg {
        transition: transform .33s ease-in-out
    }

    .x-icon>svg.rotate-90 {
        transform: rotate(-90deg)
    }

    .x-icon>svg.rotate90 {
        transform: rotate(90deg)
    }

    .x-icon>svg.rotate-180 {
        transform: rotate(-180deg)
    }

    .x-icon>svg.rotate180 {
        transform: rotate(180deg)
    }

    .x-rt:after {
        content: "";
        clear: both
    }

    .x-rt ol,
    .x-rt ul {
        text-align: left
    }

    .x-rt p {
        margin: 0
    }

    .x-rt br {
        clear: both
    }

    .mte-inline-block {
        display: inline-block
    }

    @media only screen and (min-device-width:1025px) {

        :root select,
        _::-webkit-full-page-media,
        _:future {
            font-family: sans-serif !important
        }
    }
</style>
<style data-glamor="cxs-default-sheet">.x .c1-1{letter-spacing:normal}.x .c1-2{text-transform:none}.x .c1-3{background-color:rgb(255, 255, 255)}.x .c1-4{width:100%}.x .c1-5 > div{position:relative}.x .c1-6 > div{overflow:hidden}.x .c1-7 > div{margin-top:auto}.x .c1-8 > div{margin-right:auto}.x .c1-9 > div{margin-bottom:auto}.x .c1-a > div{margin-left:auto}.x .c1-b{font-family:'Poppins', arial, sans-serif}.x .c1-c{font-size:16px}.x .c1-h{padding-top:56px}.x .c1-i{padding-bottom:56px}.x .c1-j{padding:0px !important}.x .c1-m{position:relative}.x .c1-n{overflow:visible}.x .c1-o .sticky-animate{background-color:rgba(255, 255, 255, 0.9)}.x .c1-p{z-index:11}.x .c1-q{padding-top:8px}.x .c1-r{padding-bottom:8px}.x .c1-s{background-color:rgb(246, 246, 246)}.x .c1-v{margin-left:auto}.x .c1-w{margin-right:auto}.x .c1-x{padding-left:24px}.x .c1-y{padding-right:24px}.x .c1-z{max-width:100%}.x .c1-10{padding-top:0px !important}.x .c1-11{padding-bottom:0px !important}.x .c1-16{display:flex}.x .c1-17{box-sizing:border-box}.x .c1-18{flex-direction:row}.x .c1-19{flex-wrap:nowrap}.x .c1-1a{margin-top:0}.x .c1-1b{margin-right:-12px}.x .c1-1c{margin-bottom:0}.x .c1-1d{margin-left:-12px}.x .c1-1e{align-items:center}.x .c1-1k{flex-grow:0}.x .c1-1l{flex-shrink:1}.x .c1-1m{flex-basis:10%}.x .c1-1n{padding-top:0}.x .c1-1o{padding-right:0}.x .c1-1p{padding-bottom:0}.x .c1-1q{padding-left:12px}.x .c1-1v{letter-spacing:inherit}.x .c1-1w{text-transform:inherit}.x .c1-1x{text-decoration:none}.x .c1-1y{word-wrap:break-word}.x .c1-1z{overflow-wrap:break-word}.x .c1-20{cursor:pointer}.x .c1-21{justify-content:flex-start}.x .c1-22{border-top:0px}.x .c1-23{border-right:0px}.x .c1-24{border-bottom:0px}.x .c1-25{border-left:0px}.x .c1-26{color:rgb(21, 21, 21)}.x .c1-27{margin-left:0}.x .c1-28{font-weight:inherit}.x .c1-29:hover{color:rgb(0, 117, 193)}.x .c1-2a:active{color:rgb(0, 44, 77)}.x .c1-2b{color:inherit}.x .c1-2c{display:inline-block}.x .c1-2d{vertical-align:top}.x .c1-2e{padding-top:6px}.x .c1-2f{padding-right:6px}.x .c1-2g{padding-bottom:6px}.x .c1-2h{padding-left:6px}.x .c1-2i{flex-grow:1}.x .c1-2j{flex-basis:80%}.x .c1-2k{padding-right:12px}.x .c1-2l{text-align:center}.x .c1-2m{font-family:'Fredoka One', arial, sans-serif}.x .c1-2n{max-width:calc(100% - 0.1px)}.x .c1-2s{display:inline}.x .c1-2t{width:auto}.x .c1-2u{color:rgb(0, 117, 193)}.x .c1-2v:hover{color:rgb(0, 66, 113)}.x .c1-2w{padding-left:0px}.x .c1-2x{[object -object]:0px}.x .c1-2y{vertical-align:middle}.x .c1-2z{object-fit:contain}.x .c1-30{height:80px}.x .c1-31{background-color:transparent}.x .c1-32{border-radius:0px}.x .c1-3k{justify-content:flex-end}.x .c1-3l{line-height:0}.x .c1-3o{font-size:12px}.x .c1-3t{text-transform:uppercase}.x .c1-3u{font-weight:400}.x .c1-3v:active{color:rgb(0, 117, 193)}.x .c1-3w{display:none}.x .c1-3y{flex-shrink:0}.x .c1-3z{flex-basis:auto}.x .c1-40{max-width:33%}.x .c1-41{text-align:left}.x .c1-42{max-width:none}.x .c1-43{line-height:24px}.x .c1-44{margin-right:0}.x .c1-45{-webkit-margin-before:0}.x .c1-46{-webkit-margin-after:0}.x .c1-47{-webkit-padding-start:0}.x .c1-48{color:rgb(87, 87, 87)}.x .c1-49{margin-bottom:none}.x .c1-4a{list-style:none}.x .c1-4b{padding-left:32px}.x .c1-4c{white-space:nowrap}.x .c1-4d{visibility:hidden}.x .c1-4e:first-child{margin-left:0}.x .c1-4f:first-child{padding-left:0}.x .c1-4g{display:block}.x .c1-4h{margin-left:-6px}.x .c1-4i{margin-right:-6px}.x .c1-4j{margin-top:-6px}.x .c1-4k{margin-bottom:-6px}.x .c1-4l{border-bottom-style:solid}.x .c1-4m{padding-bottom:2px}.x .c1-4n{margin-bottom:-3px}.x .c1-4o{border-top-width:1px}.x .c1-4p{border-right-width:1px}.x .c1-4q{border-bottom-width:1px}.x .c1-4r{border-left-width:1px}.x .c1-4s{font-weight:600}.x .c1-4t{transition:transform .33s ease-in-out}.x .c1-4u{transform:rotate(0deg)}.x .c1-4v{border-radius:4px}.x .c1-4w{box-shadow:0 3px 6px 3px rgba(0,0,0,0.24)}.x .c1-4x{padding-top:16px}.x .c1-4y{padding-bottom:16px}.x .c1-4z{padding-left:16px}.x .c1-50{padding-right:16px}.x .c1-51{position:absolute}.x .c1-52{right:0px}.x .c1-53{top:32px}.x .c1-54{max-height:45vh}.x .c1-55{overflow-y:auto}.x .c1-56{z-index:3}.x .c1-59{color:rgb(94, 94, 94)}.x .c1-5a:last-child{margin-bottom:0}.x .c1-5b{margin-top:8px}.x .c1-5c{margin-bottom:8px}.x .c1-5d{line-height:1.5}.x .c1-5e{color:rgb(27, 27, 27)}.x .c1-5f:hover{color:rgb(0, 73, 124)}.x .c1-5h{width:1px}.x .c1-5i{background-color:rgb(111, 111, 111)}.x .c1-5j{height:1em}.x .c1-5k{margin-right:16px}.x .c1-5l{width:40px}.x .c1-5m{transform:translateY(-50%)}.x .c1-5n{left:0px}.x .c1-5o{top:calc(50%)}.x .c1-5q{transition:}.x .c1-5r{transform:}.x .c1-5s{top:initial}.x .c1-5t{max-height:none}.x .c1-5u{width:240px}.x .c1-5v{color:inherit !important}.x .c1-5w{margin-bottom:16px}.x .c1-5x{padding-right:8px}.x .c1-5y{padding-left:8px}.x .c1-5z{border-color:rgb(226, 226, 226)}.x .c1-60{border-style:solid}.x .c1-61{margin-top:16px}.x .c1-62 dropdown{position:absolute}.x .c1-63 dropdown{right:0px}.x .c1-64 dropdown{top:initial}.x .c1-65 dropdown{white-space:nowrap}.x .c1-66 dropdown{max-height:none}.x .c1-67 dropdown{overflow-y:auto}.x .c1-68 dropdown{display:none}.x .c1-69 dropdown{z-index:3}.x .c1-6a dropdown{width:240px}.x .c1-6d listItem{display:block}.x .c1-6e listItem{text-align:left}.x .c1-6f listItem{margin-bottom:0}.x .c1-6g separator{margin-top:16px}.x .c1-6h separator{margin-bottom:16px}.x .c1-6i{background-color:rgba(22, 22, 22, 0.9)}.x .c1-6j{position:fixed}.x .c1-6k{top:0px}.x .c1-6l{height:100%}.x .c1-6m{max-width:0px}.x .c1-6n{z-index:10002}.x .c1-6o{-webkit-overflow-scrolling:touch}.x .c1-6p{transition:max-width .3s ease-in-out}.x .c1-6q{left:0px}.x .c1-6r{right:unset}.x .c1-6s{overflow:hidden}.x .c1-6t{flex-direction:column}.x .c1-6u{padding-bottom:32px}.x .c1-6v{text-shadow:none}.x .c1-6w{color:rgb(164, 164, 164)}.x .c1-6x{color:rgb(247, 247, 247)}.x .c1-6y{line-height:1.3em}.x .c1-6z{font-style:normal}.x .c1-70{top:15px}.x .c1-71{right:15px}.x .c1-72{font-size:28px}.x .c1-77{overflow-x:hidden}.x .c1-78{border-color:rgba(76, 76, 76, 0.5)}.x .c1-79{border-bottom-width:1px}.x .c1-7a:last-child{border-bottom:0}.x .c1-7b{min-width:200px}.x .c1-7c{justify-content:space-between}.x .c1-7d{font-size:22px}.x .c1-7e:hover{color:rgb(150, 193, 255)}.x .c1-7f:active{color:rgb(4, 132, 214)}.x .c1-7l{height:auto}.x .c1-7r{background-color:rgba(255, 255, 255, 0.15)}.x .c1-7s{border-color:rgb(255, 255, 255)}.x .c1-7t{border-top-width:0}.x .c1-7u{border-right-width:0}.x .c1-7v{border-bottom-width:0}.x .c1-7w{border-left-width:0}.x .c1-7x{padding-left:40px}.x .c1-7y{padding-right:40px}.x .c1-7z{color:rgb(171, 171, 171)}.x .c1-80{font-size:14px}.x .c1-81::placeholder{color:inherit}.x .c1-82:focus{outline:none}.x .c1-83:focus{box-shadow:inset 0 0 0 1px currentColor}.x .c1-84::-webkit-input-placeholder{color:inherit}.x .c1-8g{cursor:auto}.x .c1-8h{border-color:rgb(42, 42, 42)}.x .c1-8i{background-color:rgb(22, 22, 22)}.x .c1-8j{line-height:1.4}.x .c1-8k{margin-bottom:40px}.x .c1-8l{font-size:32px}.x .c1-8r{font-size:unset}.x .c1-8s{font-family:unset}.x .c1-8t{letter-spacing:unset}.x .c1-8u{text-transform:unset}.x .c1-8v{flex-wrap:wrap}.x .c1-8w{justify-content:center}.x .c1-8x{flex-basis:100%}.x .c1-8y{order:1}.x .c1-94 > *{max-width:100%}.x .c1-95{align-items:flex-start}.x .c1-96 > :nth-child(n){margin-bottom:24px}.x .c1-97  > :last-child{margin-bottom:0 !important}.x .c1-9a{line-height:1.25}.x .c1-9b > p > ol{text-align:left}.x .c1-9c > p > ol{display:block}.x .c1-9d > p > ol{padding-left:1.3em}.x .c1-9e > p > ol{margin-left:16px}.x .c1-9f > p > ol{margin-right:16px}.x .c1-9g > p > ol{margin-top:auto}.x .c1-9h > p > ol{margin-bottom:auto}.x .c1-9i > p > ul{text-align:left}.x .c1-9j > p > ul{display:block}.x .c1-9k > p > ul{padding-left:1.3em}.x .c1-9l > p > ul{margin-left:16px}.x .c1-9m > p > ul{margin-right:16px}.x .c1-9n > p > ul{margin-top:auto}.x .c1-9o > p > ul{margin-bottom:auto}.x .c1-9p > ul{text-align:left}.x .c1-9q > ul{display:block}.x .c1-9r > ul{padding-left:1.3em}.x .c1-9s > ul{margin-left:16px}.x .c1-9t > ul{margin-right:16px}.x .c1-9u > ul{margin-top:auto}.x .c1-9v > ul{margin-bottom:auto}.x .c1-9w > ol{text-align:left}.x .c1-9x > ol{display:block}.x .c1-9y > ol{padding-left:1.3em}.x .c1-9z > ol{margin-left:16px}.x .c1-a0 > ol{margin-right:16px}.x .c1-a1 > ol{margin-top:auto}.x .c1-a2 > ol{margin-bottom:auto}.x .c1-a3{font-size:inherit !important}.x .c1-a4{line-height:inherit}.x .c1-a5{font-style:italic}.x .c1-a6{text-decoration:line-through}.x .c1-a7{text-decoration:underline}.x .c1-a8{order:0}.x .c1-ad{margin-bottom:32px}.x .c1-af{margin-bottom:24px}.x .c1-ag{background-color:rgb(0, 0, 0)}.x .c1-ah{padding-top:4px}.x .c1-ai{padding-bottom:4px}.x .c1-aj{color:rgb(150, 150, 150)}.x .c1-ak{background-color:rgb(0, 117, 193)}.x .c1-al{color:rgb(255, 255, 255)}.x .c1-am{border-color:rgb(0, 143, 234)}.x .c1-an{width:50px}.x .c1-ao{right:24px}.x .c1-ap{bottom:24px}.x .c1-aq{z-index:9999}.x .c1-ar{width:65px}.x .c1-as{height:65px}.x .c1-au{border-radius:50%}.x .c1-av{box-shadow:0px 3px 18px rgba(0, 0, 0, 0.25)}.x .c1-aw{transform:translateZ(0)}.x .c1-ax{right:0px}.x .c1-ay{z-index:10000}.x .c1-az{transition:all 1s ease-in}.x .c1-b0{box-shadow:0 2px 6px 0px rgba(0,0,0,0.3)}.x .c1-b1{contain:content}.x .c1-b2{bottom:-500px}.x .c1-b3{padding-top:24px}.x .c1-b4{padding-bottom:24px}.x .c1-bc{max-height:300px}.x .c1-be{letter-spacing:1px}.x .c1-bf{margin-top:24px}.x .c1-bg{margin-bottom:4px}.x .c1-bh{word-break:break-word}.x .c1-bi{flex-basis:50%}.x .c1-bj{border-style:none}.x .c1-bk{min-height:40px}.x .c1-bl{color:rgb(48, 48, 48)}.x .c1-bm:nth-child(2){margin-left:24px}.x .c1-bn:hover{background-color:rgb(255, 255, 255)}</style>
<style data-glamor="cxs-xs-sheet">@media (max-width: 767px){.x .c1-k{padding-top:40px}}@media (max-width: 767px){.x .c1-l{padding-bottom:40px}}@media (max-width: 767px){.x .c1-2o{width:100%}}@media (max-width: 767px){.x .c1-2p{display:flex}}@media (max-width: 767px){.x .c1-2q{justify-content:center}}@media (max-width: 767px){.x .c1-33{height:84px}}@media (max-width: 767px){.x .c1-34{max-width:224px}}@media (max-width: 767px){.x .c1-35{display:block}}@media (max-width: 767px){.x .c1-36{max-height:80px}}@media (max-width: 767px){.x .c1-37{margin-top:0}}@media (max-width: 767px){.x .c1-38{margin-right:auto}}@media (max-width: 767px){.x .c1-39{margin-bottom:0}}@media (max-width: 767px){.x .c1-3a{margin-left:auto}}@media (max-width: 767px){.x .c1-85{font-size:16px}}@media (max-width: 767px){.x .c1-8a{top:50%}}@media (max-width: 767px){.x .c1-8b{transform:translateY(-50%)}}@media (max-width: 767px){.x .c1-8c{left:8px}}@media (max-width: 767px){.x .c1-98 > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-99  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-ae{height:calc((100vw - 48px)/1)}}</style>
<style data-glamor="cxs-sm-sheet">@media (min-width: 768px){.x .c1-d{font-size:16px}}@media (min-width: 768px){.x .c1-12{width:100%}}@media (min-width: 768px){.x .c1-1f{margin-top:0}}@media (min-width: 768px){.x .c1-1g{margin-right:-24px}}@media (min-width: 768px){.x .c1-1h{margin-bottom:0}}@media (min-width: 768px){.x .c1-1i{margin-left:-24px}}@media (min-width: 768px){.x .c1-1r{padding-top:0}}@media (min-width: 768px){.x .c1-1s{padding-right:24px}}@media (min-width: 768px){.x .c1-1t{padding-bottom:0}}@media (min-width: 768px){.x .c1-1u{padding-left:24px}}@media (min-width: 768px) and (max-width: 1023px){.x .c1-2r{width:100%}}@media (min-width: 768px) and (max-width: 1023px){.x .c1-3b{display:block}}@media (min-width: 768px) and (max-width: 1023px){.x .c1-3c{max-height:80px}}@media (min-width: 768px) and (max-width: 1023px){.x .c1-3d{margin-top:0}}@media (min-width: 768px) and (max-width: 1023px){.x .c1-3e{margin-right:auto}}@media (min-width: 768px) and (max-width: 1023px){.x .c1-3f{margin-bottom:0}}@media (min-width: 768px) and (max-width: 1023px){.x .c1-3g{margin-left:auto}}@media (min-width: 768px){.x .c1-3p{font-size:12px}}@media (min-width: 768px) and (max-width: 1023px){.x .c1-58{right:0px}}@media (min-width: 768px) and (max-width: 1023px){.x .c1-6c dropdown{right:0px}}@media (min-width: 768px){.x .c1-73{font-size:30px}}@media (min-width: 768px){.x .c1-7g{font-size:22px}}@media (min-width: 768px){.x .c1-86{font-size:14px}}@media (min-width: 768px) and (max-width: 1023px){.x .c1-8d{top:50%}}@media (min-width: 768px) and (max-width: 1023px){.x .c1-8e{transform:translateY(-50%)}}@media (min-width: 768px) and (max-width: 1023px){.x .c1-8f{left:8px}}@media (min-width: 768px){.x .c1-8m{font-size:38px}}@media (min-width: 768px){.x .c1-8z{flex-basis:83.33333333333334%}}@media (min-width: 768px){.x .c1-90{max-width:83.33333333333334%}}@media (min-width: 768px){.x .c1-b5{width:400px}}@media (min-width: 768px){.x .c1-b6{max-height:500px}}@media (min-width: 768px){.x .c1-b7{border-radius:7px}}@media (min-width: 768px){.x .c1-b8{margin-top:24px}}@media (min-width: 768px){.x .c1-b9{margin-right:24px}}@media (min-width: 768px){.x .c1-ba{margin-bottom:24px}}@media (min-width: 768px){.x .c1-bb{margin-left:24px}}@media (min-width: 768px){.x .c1-bd{max-height:140px}}@media (min-width: 768px){.x .c1-bo{width:auto}}</style>
<style data-glamor="cxs-md-sheet">@media (min-width: 1024px){.x .c1-e{font-size:16px}}@media (min-width: 1024px){.x .c1-t{padding-top:16px}}@media (min-width: 1024px){.x .c1-u{padding-bottom:16px}}@media (min-width: 1024px){.x .c1-13{width:984px}}@media (min-width: 1024px){.x .c1-1j{display:none}}@media (min-width: 1024px){.x .c1-3h{height:84px}}@media (min-width: 1024px){.x .c1-3i{width:auto}}@media (min-width: 1024px){.x .c1-3j{max-height:84px}}@media (min-width: 1024px){.x .c1-3m > :first-child{margin-left:0px}}@media (min-width: 1024px){.x .c1-3n{justify-content:inherit}}@media (min-width: 1024px){.x .c1-3q{font-size:12px}}@media (min-width: 1024px){.x .c1-3x{display:flex}}@media (min-width: 1024px) and (max-width: 1279px){.x .c1-57{right:0px}}@media (min-width: 1024px){.x .c1-5g > :first-child{margin-left:24px}}@media (min-width: 1024px){.x .c1-5p{left:0px}}@media (min-width: 1024px) and (max-width: 1279px){.x .c1-6b dropdown{right:0px}}@media (min-width: 1024px){.x .c1-74{font-size:30px}}@media (min-width: 1024px){.x .c1-7h{min-width:300px}}@media (min-width: 1024px){.x .c1-7i{font-size:22px}}@media (min-width: 1024px){.x .c1-7m{position:relative}}@media (min-width: 1024px){.x .c1-7n{margin-top:0}}@media (min-width: 1024px){.x .c1-7o{margin-right:0}}@media (min-width: 1024px){.x .c1-7p{margin-bottom:0}}@media (min-width: 1024px){.x .c1-7q{margin-left:0}}@media (min-width: 1024px){.x .c1-87{font-size:14px}}@media (min-width: 1024px){.x .c1-8n{text-align:center}}@media (min-width: 1024px){.x .c1-8o{font-size:38px}}@media (min-width: 1024px){.x .c1-91{flex-basis:66.66666666666666%}}@media (min-width: 1024px){.x .c1-92{max-width:66.66666666666666%}}@media (min-width: 1024px){.x .c1-93{order:0}}@media (min-width: 1024px){.x .c1-a9{flex-basis:33.33333333333333%}}@media (min-width: 1024px){.x .c1-aa{max-width:33.33333333333333%}}@media (min-width: 1024px){.x .c1-ab{order:1}}@media (min-width: 1024px){.x .c1-ac{text-align:left}}@media (min-width: 1024px){.x .c1-at{z-index:9999}}</style>
<style data-glamor="cxs-lg-sheet">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-14{width:1160px}}@media (min-width: 1280px){.x .c1-3r{font-size:12px}}@media (min-width: 1280px){.x .c1-75{font-size:32px}}@media (min-width: 1280px){.x .c1-7j{font-size:22px}}@media (min-width: 1280px){.x .c1-88{font-size:14px}}@media (min-width: 1280px){.x .c1-8p{font-size:44px}}</style>
<style data-glamor="cxs-xl-sheet">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-15{width:1280px}}@media (min-width: 1536px){.x .c1-3s{font-size:14px}}@media (min-width: 1536px){.x .c1-76{font-size:36px}}@media (min-width: 1536px){.x .c1-7k{font-size:24px}}@media (min-width: 1536px){.x .c1-89{font-size:16px}}@media (min-width: 1536px){.x .c1-8q{font-size:48px}}</style>
<style>.page-inner { background-color: rgb(0, 117, 193); min-height: 100vh; }</style>
<style>.grecaptcha-badge { visibility: hidden; }</style>
@endsection
@section('content')

<body class="x  x-fonts-fredoka-one x-fonts-poppins" context="[object Object]">
    <div id="layout-7218-ace-1-51-cf-45-f-5-b-9-df-9-ac-24-a-7-e-869-e"
        class="layout layout-layout layout-layout-layout-10 locale-es-MX lang-es">
        <div data-ux="Page" id="page-57378"
            class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
            <div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                <div id="3f43420a-929d-427e-8c69-3bf1df8dc8fe" class="widget widget-header widget-header-header-9">
                    <div data-ux="Header" role="main" data-aid="HEADER_WIDGET" id="n-57379"
                        class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                        <div>
                            <section data-ux="Section" data-aid="HEADER_SECTION"
                                class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-j c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g">
                                <div data-ux="Block"
                                    class="x-el x-el-div c1-1 c1-2 c1-m c1-n c1-b c1-c c1-d c1-e c1-f c1-g">
                                    <div data-ux="Block" id="header_navwrapper57382"
                                        class="x-el x-el-div c1-1 c1-2 c1-o c1-b c1-c c1-d c1-e c1-f c1-g">
                                        <div data-ux="Block" id="header_stickynav57381"
                                            class="x-el x-el-div c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g">
                                            <nav data-ux="Block"
                                                class="x-el x-el-nav c1-1 c1-2 c1-m c1-p c1-q c1-r c1-s c1-b c1-c c1-d c1-t c1-u c1-e c1-f c1-g">
                                                <div data-ux="Container"
                                                    class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g">
                                                    <div data-ux="Grid"
                                                        class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-b c1-c c1-1f c1-1g c1-1h c1-1i c1-d c1-1j c1-e c1-f c1-g">
                                                        <div data-ux="GridCell"
                                                            class="x-el x-el-div c1-1 c1-2 c1-17 c1-1k c1-1l c1-1m c1-z c1-1n c1-1o c1-1p c1-1q c1-b c1-c c1-1r c1-1s c1-1t c1-1u c1-d c1-e c1-f c1-g">
                                                            <div data-ux="Element" id="bs-1"
                                                                class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                <a rel="" role="button" aria-haspopup="menu"
                                                                    data-ux="LinkDropdown" data-toggle-ignore="true"
                                                                    id="57383" aria-expanded="false"
                                                                    toggleId="n-57379-navId-mobile" icon="hamburger"
                                                                    data-edit-interactive="true"
                                                                    data-aid="HAMBURGER_MENU_LINK"
                                                                    aria-label="Hamburger Site Navigation Icon" href="#"
                                                                    data-typography="LinkAlpha"
                                                                    class="x-el x-el-a c1-1v c1-1w c1-1x c1-1y c1-1z c1-16 c1-20 c1-1e c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-b c1-c c1-28 c1-29 c1-2a c1-d c1-1j c1-e c1-f c1-g"
                                                                    data-tccl="ux2.HEADER.header9.Section.Default.Link.Dropdown.57384.click,click"><svg
                                                                        viewBox="0 0 24 24" fill="currentColor"
                                                                        width="40px" height="40px"
                                                                        data-ux="IconHamburger"
                                                                        class="x-el x-el-svg c1-1 c1-2 c1-2b c1-2c c1-2d c1-2e c1-2f c1-2g c1-2h c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                        <g>
                                                                            <path fill-rule="evenodd" d="M4 8h16V6H4z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M4 13.096h16v-2.001H4z"></path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M4 18.346h16v-2H4z"></path>
                                                                        </g>
                                                                    </svg></a></div>
                                                        </div>
                                                        <div data-ux="GridCell"
                                                            class="x-el x-el-div c1-1 c1-2 c1-17 c1-2i c1-1l c1-2j c1-z c1-1n c1-2k c1-1p c1-1q c1-16 c1-2l c1-1z c1-b c1-c c1-1r c1-1s c1-1t c1-1u c1-d c1-e c1-f c1-g">
                                                            <div data-ux="Block" data-aid="HEADER_LOGO_RENDERED"
                                                                class="x-el x-el-div c1-2c c1-2m c1-2n c1-c c1-2o c1-2p c1-2q c1-2r c1-d c1-e c1-f c1-g">
                                                                <a rel="" role="link" aria-haspopup="false"
                                                                    data-ux="Link"
                                                                    data-page="e98f1128-c137-4a7b-aa3d-6d15319022ac"
                                                                    title="3169459000006542213gc" href="/home"
                                                                    data-typography="LinkAlpha"
                                                                    class="x-el x-el-a c1-1v c1-1w c1-1x c1-1y c1-1z c1-2s c1-20 c1-22 c1-23 c1-24 c1-25 c1-z c1-2t c1-b c1-2u c1-c c1-28 c1-2v c1-2a c1-d c1-e c1-f c1-g"
                                                                    data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.57385.click,click">
                                                                    <div data-ux="Block"
                                                                        class="x-el x-el-div c1-1 c1-2 c1-2c c1-1n c1-1o c1-1p c1-2w c1-2x c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                        <img data-lazyimg="true"
                                                                            data-srclazy="//img1.wsimg.com/isteam/ip/7218ace1-51cf-45f5-b9df-9ac24a7e869e/turiscabo-positivo.png/:/rs=h:84,cg:true,m/qt=q:95"
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                                            srcSet="//img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:203.4437086092715,h:84,cg:true,m,i:true/qt=q:1 451w, //img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:203.4437086092715,h:84,cg:true,m,i:true/qt=q:1 768w, //img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:203.4437086092715,h:84,cg:true,m,i:true/qt=q:1 1024w, //img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:203.4437086092715,h:84,cg:true,m,i:true/qt=q:1 1280w, //img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:203.4437086092715,h:84,cg:true,m,i:true/qt=q:1 1536w"
                                                                            sizes="(min-width: 451px) and (max-width: 767px) 767px, (min-width: 768px) and (max-width: 1023px) 1023px, (min-width: 1024px) and (max-width: 1279px) 1279px, (min-width: 1280px) and (max-width: 1535px) 1535px, (min-width: 1536px) 1536px"
                                                                            data-srcsetlazy="//img1.wsimg.com/isteam/ip/7218ace1-51cf-45f5-b9df-9ac24a7e869e/turiscabo-positivo.png/:/rs=w:203,h:84,cg:true,m/cr=w:203,h:84/qt=q:95, //img1.wsimg.com/isteam/ip/7218ace1-51cf-45f5-b9df-9ac24a7e869e/turiscabo-positivo.png/:/rs=w:407,h:168,cg:true,m/cr=w:407,h:168/qt=q:95 2x, //img1.wsimg.com/isteam/ip/7218ace1-51cf-45f5-b9df-9ac24a7e869e/turiscabo-positivo.png/:/rs=w:610,h:252,cg:true,m/cr=w:610,h:252/qt=q:95 3x"
                                                                            alt="3169459000006542213gc"
                                                                            data-ux="ImageLogo"
                                                                            data-aid="HEADER_LOGO_IMAGE_RENDERED"
                                                                            class="x-el x-el-img c1-1 c1-2 c1-2t c1-z c1-v c1-w c1-1a c1-1c c1-2y c1-2z c1-30 c1-31 c1-1n c1-1o c1-1p c1-2w c1-32 c1-2x c1-b c1-c c1-33 c1-34 c1-35 c1-36 c1-37 c1-38 c1-39 c1-3a c1-3b c1-3c c1-3d c1-3e c1-3f c1-3g c1-d c1-3h c1-3i c1-3j c1-e c1-f c1-g" />
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div data-ux="GridCell"
                                                            class="x-el x-el-div c1-1 c1-2 c1-17 c1-2i c1-1l c1-1m c1-z c1-1n c1-2k c1-1p c1-2w c1-16 c1-3k c1-b c1-c c1-1r c1-1s c1-1t c1-1u c1-d c1-e c1-f c1-g">
                                                            <div data-ux="UtilitiesMenu"
                                                                id="membership157386-utility-menu"
                                                                class="x-el x-el-div c1-1 c1-2 c1-16 c1-1e c1-3l c1-b c1-c c1-3k c1-d c1-3m c1-3n c1-e c1-f c1-g">
                                                                <span data-ux="Element"
                                                                    class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                    <div data-ux="Element" id="bs-2"
                                                                        class="x-el x-el-div c1-1 c1-2 c1-2c c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                        <div data-ux="Block"
                                                                            class="x-el x-el-div c1-1 c1-2 c1-16 c1-1e c1-3o c1-b c1-3p c1-3q c1-3r c1-3s">
                                                                            <a rel="" role="link" aria-haspopup="false"
                                                                                data-ux="UtilitiesMenuLink"
                                                                                aria-label="Ícono de carrito de compras"
                                                                                data-page="1def3029-36ae-4e5f-be4b-f3aa97ad37cb"
                                                                                data-page-query="olsPage=cart"
                                                                                href="https://turiscabos.com/services?olsPage=cart"
                                                                                data-typography="NavAlpha"
                                                                                class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-16 c1-20 c1-3l c1-1e c1-b c1-26 c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g"
                                                                                data-tccl="ux2.HEADER.header9.UtilitiesMenu.Default.Link.Default.57387.click,click"><svg
                                                                                    viewBox="0 0 24 24"
                                                                                    fill="currentColor" width="40px"
                                                                                    height="40px"
                                                                                    data-ux="UtilitiesMenuIcon"
                                                                                    data-aid="CART_ICON_RENDER"
                                                                                    data-typography="NavAlpha"
                                                                                    class="x-el x-el-svg c1-1 c1-3t c1-26 c1-2c c1-2y c1-2e c1-2f c1-2g c1-2h c1-3l c1-b c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g">
                                                                                    <path fill-rule="evenodd"
                                                                                        d="M16.235 17.034c.634 0 1.16.527 1.16 1.164 0 .636-.526 1.164-1.16 1.164-.633 0-1.16-.528-1.16-1.164a1.17 1.17 0 0 1 1.16-1.164zm-8.118 0c.634 0 1.16.527 1.16 1.164 0 .636-.526 1.164-1.16 1.164-.634 0-1.16-.528-1.16-1.164a1.17 1.17 0 0 1 1.16-1.164zm.632-4.492l6.818-.964 1.019-3.5-8.709.081.872 4.383zm.263 2.05l-.024.47h8.727l.028 1.972H7.537a.915.915 0 0 1-.913-.916c0-.218.113-.513.404-1.051l.12-.263L5.63 6.83H4V5h3.178l.289 1.164h11.668l-1.987 7.217-8.136 1.21z">
                                                                                    </path>
                                                                                </svg></a></div>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div data-ux="Grid" id="navBarId-57389"
                                                        class="x-el x-el-div c1-1 c1-2 c1-3w c1-17 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-21 c1-1e c1-1n c1-1p c1-b c1-c c1-1f c1-1g c1-1h c1-1i c1-d c1-3x c1-e c1-f c1-g">
                                                        <div data-ux="GridCell"
                                                            class="x-el x-el-div c1-1 c1-2 c1-17 c1-2i c1-3y c1-3z c1-40 c1-1n c1-2k c1-1p c1-1q c1-16 c1-1e c1-21 c1-b c1-c c1-1r c1-1s c1-1t c1-1u c1-d c1-e c1-f c1-g">
                                                            <div data-ux="Block" data-aid="HEADER_LOGO_RENDERED"
                                                                class="x-el x-el-div c1-2c c1-2m c1-2n c1-41 c1-c c1-2o c1-2p c1-2q c1-2r c1-d c1-e c1-f c1-g">
                                                                <a rel="" role="link" aria-haspopup="false"
                                                                    data-ux="Link"
                                                                    data-page="e98f1128-c137-4a7b-aa3d-6d15319022ac"
                                                                    title="3169459000006542213gc" href="/home"
                                                                    data-typography="LinkAlpha"
                                                                    class="x-el x-el-a c1-1v c1-1w c1-1x c1-1y c1-1z c1-2s c1-20 c1-22 c1-23 c1-24 c1-25 c1-z c1-2t c1-b c1-2u c1-c c1-28 c1-2v c1-2a c1-d c1-e c1-f c1-g"
                                                                    data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.57390.click,click">
                                                                    <div data-ux="Block"
                                                                        class="x-el x-el-div c1-1 c1-2 c1-2c c1-1n c1-1o c1-1p c1-2w c1-2x c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                        <img data-lazyimg="true"
                                                                            data-srclazy="//img1.wsimg.com/isteam/ip/7218ace1-51cf-45f5-b9df-9ac24a7e869e/turiscabo-positivo.png/:/rs=h:84,cg:true,m/qt=q:95"
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                                            srcSet="//img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:203.4437086092715,h:84,cg:true,m,i:true/qt=q:1 451w, //img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:203.4437086092715,h:84,cg:true,m,i:true/qt=q:1 768w, //img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:203.4437086092715,h:84,cg:true,m,i:true/qt=q:1 1024w, //img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:203.4437086092715,h:84,cg:true,m,i:true/qt=q:1 1280w, //img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:203.4437086092715,h:84,cg:true,m,i:true/qt=q:1 1536w"
                                                                            sizes="(min-width: 451px) and (max-width: 767px) 767px, (min-width: 768px) and (max-width: 1023px) 1023px, (min-width: 1024px) and (max-width: 1279px) 1279px, (min-width: 1280px) and (max-width: 1535px) 1535px, (min-width: 1536px) 1536px"
                                                                            data-srcsetlazy="//img1.wsimg.com/isteam/ip/7218ace1-51cf-45f5-b9df-9ac24a7e869e/turiscabo-positivo.png/:/rs=w:203,h:84,cg:true,m/cr=w:203,h:84/qt=q:95, //img1.wsimg.com/isteam/ip/7218ace1-51cf-45f5-b9df-9ac24a7e869e/turiscabo-positivo.png/:/rs=w:407,h:168,cg:true,m/cr=w:407,h:168/qt=q:95 2x, //img1.wsimg.com/isteam/ip/7218ace1-51cf-45f5-b9df-9ac24a7e869e/turiscabo-positivo.png/:/rs=w:610,h:252,cg:true,m/cr=w:610,h:252/qt=q:95 3x"
                                                                            alt="3169459000006542213gc"
                                                                            data-ux="ImageLogo"
                                                                            data-aid="HEADER_LOGO_IMAGE_RENDERED"
                                                                            id="logo-57388"
                                                                            class="x-el x-el-img c1-1 c1-2 c1-2t c1-z c1-v c1-w c1-1a c1-1c c1-2y c1-2z c1-30 c1-31 c1-1n c1-1o c1-1p c1-2w c1-32 c1-2x c1-b c1-c c1-33 c1-34 c1-35 c1-36 c1-37 c1-38 c1-39 c1-3a c1-3b c1-3c c1-3d c1-3e c1-3f c1-3g c1-d c1-3h c1-3i c1-3j c1-e c1-f c1-g" />
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div data-ux="GridCell"
                                                            class="x-el x-el-div c1-1 c1-2 c1-17 c1-2i c1-1l c1-3z c1-z c1-1n c1-2k c1-1p c1-1q c1-b c1-c c1-1r c1-1s c1-1t c1-1u c1-d c1-e c1-f c1-g">
                                                            <div data-ux="Block"
                                                                class="x-el x-el-div c1-1 c1-2 c1-16 c1-1e c1-3k c1-2i c1-3z c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                <div data-ux="Block"
                                                                    class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                    <nav data-ux="Nav" data-aid="HEADER_NAV_RENDERED"
                                                                        role="navigation"
                                                                        class="x-el x-el-nav c1-1 c1-2 c1-42 c1-43 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                        <ul data-ux="List" id="nav-57391"
                                                                            class="x-el x-el-ul c1-1 c1-2 c1-1a c1-1c c1-27 c1-44 c1-45 c1-46 c1-47 c1-m c1-1n c1-1o c1-1p c1-2w c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                            <li data-ux="ListItemInline"
                                                                                class="x-el x-el-li nav-item c1-1 c1-2 c1-48 c1-27 c1-49 c1-2c c1-4a c1-2d c1-4b c1-4c c1-m c1-4d c1-b c1-c c1-4e c1-4f c1-d c1-e c1-f c1-g">
                                                                                <a rel="" role="link"
                                                                                    aria-haspopup="false"
                                                                                    data-ux="NavLink" target=""
                                                                                    data-page="e98f1128-c137-4a7b-aa3d-6d15319022ac"
                                                                                    data-edit-interactive="true"
                                                                                    aria-labelledby="nav-57391"
                                                                                    href="/home"
                                                                                    data-typography="NavAlpha"
                                                                                    class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-4g c1-20 c1-4h c1-4i c1-4j c1-4k c1-2h c1-2f c1-2e c1-2g c1-b c1-26 c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g"
                                                                                    data-tccl="ux2.HEADER.header9.Nav.Default.Link.Default.57393.click,click">Home</a>
                                                                            </li>
                                                                            <li data-ux="ListItemInline"
                                                                                class="x-el x-el-li nav-item c1-1 c1-2 c1-48 c1-27 c1-49 c1-2c c1-4a c1-2d c1-4b c1-4c c1-m c1-4d c1-b c1-c c1-4e c1-4f c1-d c1-e c1-f c1-g">
                                                                                <a rel="" role="link"
                                                                                    aria-haspopup="false"
                                                                                    data-ux="NavLink" target=""
                                                                                    data-page="1def3029-36ae-4e5f-be4b-f3aa97ad37cb"
                                                                                    data-edit-interactive="true"
                                                                                    aria-labelledby="nav-57391"
                                                                                    href="/services"
                                                                                    data-typography="NavAlpha"
                                                                                    class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-4g c1-20 c1-4h c1-4i c1-4j c1-4k c1-2h c1-2f c1-2e c1-2g c1-b c1-26 c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g"
                                                                                    data-tccl="ux2.HEADER.header9.Nav.Default.Link.Default.57394.click,click">SERVICES</a>
                                                                            </li>
                                                                            <li data-ux="ListItemInline"
                                                                                class="x-el x-el-li nav-item c1-1 c1-2 c1-48 c1-27 c1-49 c1-2c c1-4a c1-2d c1-4b c1-4c c1-m c1-4d c1-b c1-c c1-4e c1-4f c1-d c1-e c1-f c1-g">
                                                                                <a rel="" role="link"
                                                                                    aria-haspopup="false"
                                                                                    data-ux="NavLink" target=""
                                                                                    data-page="ab973aed-cf45-4988-a6fa-a6cf15f1d95e"
                                                                                    data-edit-interactive="true"
                                                                                    aria-labelledby="nav-57391"
                                                                                    href="/about-us"
                                                                                    data-typography="NavAlpha"
                                                                                    class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-4g c1-20 c1-4h c1-4i c1-4j c1-4k c1-2h c1-2f c1-2e c1-2g c1-b c1-26 c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g"
                                                                                    data-tccl="ux2.HEADER.header9.Nav.Default.Link.Default.57395.click,click">About
                                                                                    Us</a></li>
                                                                            <li data-ux="ListItemInline"
                                                                                class="x-el x-el-li nav-item c1-1 c1-2 c1-48 c1-27 c1-49 c1-2c c1-4a c1-2d c1-4b c1-4c c1-m c1-4d c1-b c1-c c1-4e c1-4f c1-d c1-e c1-f c1-g">
                                                                                <a rel="" role="link"
                                                                                    aria-haspopup="false"
                                                                                    data-ux="NavLink" target=""
                                                                                    data-page="5789847b-57a4-45e0-8036-df34c5b63fb5"
                                                                                    data-edit-interactive="true"
                                                                                    aria-labelledby="nav-57391"
                                                                                    href="/gallery"
                                                                                    data-typography="NavAlpha"
                                                                                    class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-4g c1-20 c1-4h c1-4i c1-4j c1-4k c1-2h c1-2f c1-2e c1-2g c1-b c1-26 c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g"
                                                                                    data-tccl="ux2.HEADER.header9.Nav.Default.Link.Default.57396.click,click">Gallery</a>
                                                                            </li>
                                                                            <li data-ux="ListItemInline"
                                                                                class="x-el x-el-li nav-item c1-1 c1-2 c1-48 c1-27 c1-49 c1-2c c1-4a c1-2d c1-4b c1-4c c1-m c1-4d c1-b c1-c c1-4e c1-4f c1-d c1-e c1-f c1-g">
                                                                                <a rel="" role="link"
                                                                                    aria-haspopup="false"
                                                                                    data-ux="NavLink" target=""
                                                                                    data-page="ac4c9a95-588c-4728-a527-abb41117700a"
                                                                                    data-edit-interactive="true"
                                                                                    aria-labelledby="nav-57391"
                                                                                    href="/contact"
                                                                                    data-typography="NavAlpha"
                                                                                    class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-4g c1-20 c1-4h c1-4i c1-4j c1-4k c1-2h c1-2f c1-2e c1-2g c1-b c1-26 c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g"
                                                                                    data-tccl="ux2.HEADER.header9.Nav.Default.Link.Default.57397.click,click">Contact</a>
                                                                            </li>
                                                                            <li data-ux="ListItemInline"
                                                                                class="x-el x-el-li nav-item c1-1 c1-2 c1-48 c1-27 c1-49 c1-2c c1-4a c1-2d c1-4b c1-4c c1-m c1-4d c1-b c1-c c1-4e c1-4f c1-d c1-e c1-f c1-g">
                                                                                <a rel="" role="link"
                                                                                    aria-haspopup="false"
                                                                                    data-ux="NavLinkActive" target=""
                                                                                    data-page="5ace6a3a-ccbb-4bcd-9a15-a1c48a097c2a"
                                                                                    data-edit-interactive="true"
                                                                                    aria-labelledby="nav-57391"
                                                                                    href="/faq%C2%B4s"
                                                                                    data-typography="NavAlpha"
                                                                                    class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-4g c1-20 c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-b c1-2u c1-c c1-4s c1-2v c1-3v c1-d c1-e c1-f c1-g"
                                                                                    data-tccl="ux2.HEADER.header9.Nav.Default.Link.Active.57398.click,click">FAQ´S</a>
                                                                            </li>
                                                                            <li data-ux="ListItemInline"
                                                                                class="x-el x-el-li nav-item c1-1 c1-2 c1-48 c1-27 c1-49 c1-2c c1-4a c1-2d c1-4b c1-4c c1-m c1-4d c1-b c1-c c1-4e c1-4f c1-d c1-e c1-f c1-g">
                                                                                <div data-ux="Element" id="bs-3"
                                                                                    class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                                    <a rel="" role="button"
                                                                                        aria-haspopup="menu"
                                                                                        data-ux="NavLinkDropdown"
                                                                                        data-toggle-ignore="true"
                                                                                        id="57399" aria-expanded="false"
                                                                                        data-aid="NAV_MORE"
                                                                                        data-edit-interactive="true"
                                                                                        href="#"
                                                                                        data-typography="NavAlpha"
                                                                                        class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-16 c1-20 c1-1e c1-b c1-26 c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g"
                                                                                        data-tccl="ux2.HEADER.header9.Nav.Default.Link.Dropdown.57400.click,click">
                                                                                        <div style="pointer-events:none;display:flex;align-items:center"
                                                                                            data-aid="NAV_MORE"><span
                                                                                                style="margin-right:4px">Más</span><svg
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="currentColor"
                                                                                                width="16" height="16"
                                                                                                data-ux="Icon"
                                                                                                class="x-el x-el-svg c1-1 c1-2 c1-2b c1-2c c1-4t c1-4u c1-2y c1-m c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M18.605 7l-6.793 7.024-6.375-7.002L4 8.467 11.768 17l.485-.501L20 8.489z">
                                                                                                </path>
                                                                                            </svg></div>
                                                                                    </a></div>
                                                                                <ul data-ux="Dropdown" role="menu"
                                                                                    id="more-57392"
                                                                                    class="x-el x-el-ul c1-1 c1-2 c1-4v c1-4w c1-3 c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-4c c1-54 c1-55 c1-3w c1-56 c1-b c1-c c1-57 c1-58 c1-d c1-e c1-f c1-g">
                                                                                    <li data-ux="ListItem"
                                                                                        role="menuitem"
                                                                                        class="x-el x-el-li c1-1 c1-2 c1-59 c1-1c c1-4g c1-41 c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                        <a rel="" role="link"
                                                                                            aria-haspopup="false"
                                                                                            data-ux="NavMoreMenuLink"
                                                                                            target=""
                                                                                            data-page="e98f1128-c137-4a7b-aa3d-6d15319022ac"
                                                                                            data-edit-interactive="true"
                                                                                            aria-labelledby="more-57392"
                                                                                            href="/home"
                                                                                            data-typography="NavAlpha"
                                                                                            class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2c c1-20 c1-5b c1-5c c1-5d c1-b c1-5e c1-c c1-3u c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                            data-tccl="ux2.HEADER.header9.Nav.MoreMenu.Link.Default.57401.click,click">Home</a>
                                                                                    </li>
                                                                                    <li data-ux="ListItem"
                                                                                        role="menuitem"
                                                                                        class="x-el x-el-li c1-1 c1-2 c1-59 c1-1c c1-4g c1-41 c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                        <a rel="" role="link"
                                                                                            aria-haspopup="false"
                                                                                            data-ux="NavMoreMenuLink"
                                                                                            target=""
                                                                                            data-page="1def3029-36ae-4e5f-be4b-f3aa97ad37cb"
                                                                                            data-edit-interactive="true"
                                                                                            aria-labelledby="more-57392"
                                                                                            href="/services"
                                                                                            data-typography="NavAlpha"
                                                                                            class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2c c1-20 c1-5b c1-5c c1-5d c1-b c1-5e c1-c c1-3u c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                            data-tccl="ux2.HEADER.header9.Nav.MoreMenu.Link.Default.57402.click,click">SERVICES</a>
                                                                                    </li>
                                                                                    <li data-ux="ListItem"
                                                                                        role="menuitem"
                                                                                        class="x-el x-el-li c1-1 c1-2 c1-59 c1-1c c1-4g c1-41 c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                        <a rel="" role="link"
                                                                                            aria-haspopup="false"
                                                                                            data-ux="NavMoreMenuLink"
                                                                                            target=""
                                                                                            data-page="ab973aed-cf45-4988-a6fa-a6cf15f1d95e"
                                                                                            data-edit-interactive="true"
                                                                                            aria-labelledby="more-57392"
                                                                                            href="/about-us"
                                                                                            data-typography="NavAlpha"
                                                                                            class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2c c1-20 c1-5b c1-5c c1-5d c1-b c1-5e c1-c c1-3u c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                            data-tccl="ux2.HEADER.header9.Nav.MoreMenu.Link.Default.57403.click,click">About
                                                                                            Us</a></li>
                                                                                    <li data-ux="ListItem"
                                                                                        role="menuitem"
                                                                                        class="x-el x-el-li c1-1 c1-2 c1-59 c1-1c c1-4g c1-41 c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                        <a rel="" role="link"
                                                                                            aria-haspopup="false"
                                                                                            data-ux="NavMoreMenuLink"
                                                                                            target=""
                                                                                            data-page="5789847b-57a4-45e0-8036-df34c5b63fb5"
                                                                                            data-edit-interactive="true"
                                                                                            aria-labelledby="more-57392"
                                                                                            href="/gallery"
                                                                                            data-typography="NavAlpha"
                                                                                            class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2c c1-20 c1-5b c1-5c c1-5d c1-b c1-5e c1-c c1-3u c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                            data-tccl="ux2.HEADER.header9.Nav.MoreMenu.Link.Default.57404.click,click">Gallery</a>
                                                                                    </li>
                                                                                    <li data-ux="ListItem"
                                                                                        role="menuitem"
                                                                                        class="x-el x-el-li c1-1 c1-2 c1-59 c1-1c c1-4g c1-41 c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                        <a rel="" role="link"
                                                                                            aria-haspopup="false"
                                                                                            data-ux="NavMoreMenuLink"
                                                                                            target=""
                                                                                            data-page="ac4c9a95-588c-4728-a527-abb41117700a"
                                                                                            data-edit-interactive="true"
                                                                                            aria-labelledby="more-57392"
                                                                                            href="/contact"
                                                                                            data-typography="NavAlpha"
                                                                                            class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2c c1-20 c1-5b c1-5c c1-5d c1-b c1-5e c1-c c1-3u c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                            data-tccl="ux2.HEADER.header9.Nav.MoreMenu.Link.Default.57405.click,click">Contact</a>
                                                                                    </li>
                                                                                    <li data-ux="ListItem"
                                                                                        role="menuitem"
                                                                                        class="x-el x-el-li c1-1 c1-2 c1-59 c1-1c c1-4g c1-41 c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                        <a rel="" role="link"
                                                                                            aria-haspopup="false"
                                                                                            data-ux="NavMoreMenuLinkActive"
                                                                                            target=""
                                                                                            data-page="5ace6a3a-ccbb-4bcd-9a15-a1c48a097c2a"
                                                                                            data-edit-interactive="true"
                                                                                            aria-labelledby="more-57392"
                                                                                            href="/faq%C2%B4s"
                                                                                            data-typography="NavAlpha"
                                                                                            class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2c c1-20 c1-4l c1-4m c1-5c c1-4o c1-4p c1-4q c1-4r c1-5b c1-5d c1-b c1-2u c1-c c1-4s c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                            data-tccl="ux2.HEADER.header9.Nav.MoreMenu.Link.Active.57406.click,click">FAQ´S</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </nav>
                                                                </div>
                                                                <div data-ux="Block"
                                                                    class="x-el x-el-div c1-1 c1-2 c1-16 c1-m c1-1e c1-1k c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                    <div data-ux="UtilitiesMenu"
                                                                        id="n-5737957407-utility-menu"
                                                                        class="x-el x-el-div c1-1 c1-2 c1-16 c1-1e c1-3l c1-b c1-c c1-3k c1-d c1-5g c1-3n c1-e c1-f c1-g">
                                                                        <div data-ux="Pipe"
                                                                            id="n-5737957407-commerce-pipe"
                                                                            class="x-el x-el-div c1-1 c1-2 c1-5h c1-22 c1-23 c1-24 c1-25 c1-5i c1-5j c1-2c c1-5k c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                        </div>
                                                                        <div data-ux="Element" id="bs-4"
                                                                            class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                            <div data-ux="Block"
                                                                                class="x-el x-el-div c1-1 c1-2 c1-16 c1-1e c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                                <div data-ux="Block"
                                                                                    data-aid="SEARCH_FORM_RENDERED"
                                                                                    class="x-el x-el-div c1-1 c1-2 c1-5l c1-16 c1-1e c1-m c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                                    <div data-ux="Block"
                                                                                        class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                                        <div data-ux="Block"
                                                                                            class="x-el x-el-div c1-1 c1-2 c1-5l c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                                            <svg viewBox="0 0 24 24"
                                                                                                fill="currentColor"
                                                                                                width="40px"
                                                                                                height="40px"
                                                                                                data-ux="UtilitiesMenuIcon"
                                                                                                data-aid="SEARCH_ICON_RENDERED"
                                                                                                data-typography="NavAlpha"
                                                                                                class="x-el x-el-svg c1-1 c1-3t c1-26 c1-2c c1-5m c1-2y c1-2e c1-2f c1-2g c1-2h c1-3l c1-20 c1-51 c1-n c1-5n c1-5o c1-b c1-c c1-3u c1-2v c1-3v c1-d c1-5p c1-e c1-f c1-g">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M16.083 14.688l3.833 3.764-1.481 1.455-3.878-3.807a6.746 6.746 0 0 1-3.808 1.167C7.028 17.267 4 14.29 4 10.633 4 6.976 7.028 4 10.75 4c3.72 0 6.748 2.976 6.748 6.633 0 1.467-.5 2.894-1.415 4.055zm-.673-4.055c0-2.52-2.09-4.569-4.66-4.569-2.57 0-4.66 2.05-4.66 4.57 0 2.519 2.09 4.569 4.66 4.569 2.57 0 4.66-2.05 4.66-4.57z">
                                                                                                </path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><span data-ux="Element"
                                                                            class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                            <div data-ux="Element" id="bs-5"
                                                                                class="x-el x-el-div c1-1 c1-2 c1-2c c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                                <div data-ux="Block"
                                                                                    class="x-el x-el-div c1-1 c1-2 c1-16 c1-1e c1-3o c1-b c1-3p c1-3q c1-3r c1-3s">
                                                                                    <a rel="" role="link"
                                                                                        aria-haspopup="false"
                                                                                        data-ux="UtilitiesMenuLink"
                                                                                        aria-label="Ícono de carrito de compras"
                                                                                        data-page="1def3029-36ae-4e5f-be4b-f3aa97ad37cb"
                                                                                        data-page-query="olsPage=cart"
                                                                                        href="https://turiscabos.com/services?olsPage=cart"
                                                                                        data-typography="NavAlpha"
                                                                                        class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-16 c1-20 c1-3l c1-1e c1-b c1-26 c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g"
                                                                                        data-tccl="ux2.HEADER.header9.UtilitiesMenu.Default.Link.Default.57409.click,click"><svg
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="currentColor"
                                                                                            width="40px" height="40px"
                                                                                            data-ux="UtilitiesMenuIcon"
                                                                                            data-aid="CART_ICON_RENDER"
                                                                                            data-typography="NavAlpha"
                                                                                            class="x-el x-el-svg c1-1 c1-3t c1-26 c1-2c c1-2y c1-2e c1-2f c1-2g c1-2h c1-3l c1-b c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g">
                                                                                            <path fill-rule="evenodd"
                                                                                                d="M16.235 17.034c.634 0 1.16.527 1.16 1.164 0 .636-.526 1.164-1.16 1.164-.633 0-1.16-.528-1.16-1.164a1.17 1.17 0 0 1 1.16-1.164zm-8.118 0c.634 0 1.16.527 1.16 1.164 0 .636-.526 1.164-1.16 1.164-.634 0-1.16-.528-1.16-1.164a1.17 1.17 0 0 1 1.16-1.164zm.632-4.492l6.818-.964 1.019-3.5-8.709.081.872 4.383zm.263 2.05l-.024.47h8.727l.028 1.972H7.537a.915.915 0 0 1-.913-.916c0-.218.113-.513.404-1.051l.12-.263L5.63 6.83H4V5h3.178l.289 1.164h11.668l-1.987 7.217-8.136 1.21z">
                                                                                            </path>
                                                                                        </svg></a></div>
                                                                            </div>
                                                                        </span><span data-ux="Element"
                                                                            id="n-5737957407-membership-icon"
                                                                            class="x-el x-el-span c1-1 c1-2 c1-m c1-16 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                            <div data-ux="Block"
                                                                                class="x-el x-el-div c1-1 c1-2 c1-16 c1-1e c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                                <span data-ux="Element"
                                                                                    class="x-el x-el-span membership-icon-logged-out c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                                    <div data-ux="Element" id="bs-6"
                                                                                        class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                                        <a rel="" role="button"
                                                                                            aria-haspopup="menu"
                                                                                            data-ux="UtilitiesMenuLink"
                                                                                            data-toggle-ignore="true"
                                                                                            id="57410"
                                                                                            aria-expanded="false"
                                                                                            data-aid="MEMBERSHIP_ICON_DESKTOP_RENDERED"
                                                                                            data-edit-interactive="true"
                                                                                            href="#"
                                                                                            data-typography="NavAlpha"
                                                                                            class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2s c1-20 c1-3l c1-b c1-26 c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g"
                                                                                            data-tccl="ux2.HEADER.header9.UtilitiesMenu.Default.Link.Dropdown.57411.click,click">
                                                                                            <div style="pointer-events:auto;display:flex;align-items:center"
                                                                                                data-aid="MEMBERSHIP_ICON_DESKTOP_RENDERED">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    fill="currentColor"
                                                                                                    width="40px"
                                                                                                    height="40px"
                                                                                                    data-ux="UtilitiesMenuIcon"
                                                                                                    data-typography="NavAlpha"
                                                                                                    class="x-el x-el-svg c1-1 c1-3t c1-2b c1-2c c1-5q c1-5r c1-2y c1-2e c1-2f c1-2g c1-2h c1-3l c1-m c1-b c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g">
                                                                                                    <path
                                                                                                        fill-rule="evenodd"
                                                                                                        d="M19.62 19.29l.026.71h-2.421l-.028-.658c-.119-2.71-2.48-4.833-5.374-4.833-2.894 0-5.254 2.123-5.373 4.833L6.421 20H4l.027-.71c.098-2.56 1.658-4.896 4.04-6.135-1.169-.99-1.848-2.402-1.848-3.9C6.219 6.357 8.733 4 11.823 4c3.09 0 5.605 2.357 5.605 5.255 0 1.497-.68 2.909-1.85 3.9 2.383 1.239 3.944 3.574 4.041 6.135zM11.822 6.273c-1.754 0-3.18 1.338-3.18 2.982 0 1.645 1.426 2.982 3.18 2.982 1.754 0 3.18-1.337 3.18-2.982 0-1.644-1.426-2.982-3.18-2.982z">
                                                                                                    </path>
                                                                                                </svg></div>
                                                                                        </a></div>
                                                                                </span><span data-ux="Element"
                                                                                    class="x-el x-el-span membership-icon-logged-in c1-1 c1-2 c1-3w c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                                    <div data-ux="Element" id="bs-7"
                                                                                        class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                                        <a rel="" role="button"
                                                                                            aria-haspopup="menu"
                                                                                            data-ux="UtilitiesMenuLink"
                                                                                            data-toggle-ignore="true"
                                                                                            id="57412"
                                                                                            aria-expanded="false"
                                                                                            data-aid="MEMBERSHIP_ICON_DESKTOP_RENDERED"
                                                                                            data-edit-interactive="true"
                                                                                            href="#"
                                                                                            data-typography="NavAlpha"
                                                                                            class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2s c1-20 c1-3l c1-b c1-26 c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g"
                                                                                            data-tccl="ux2.HEADER.header9.UtilitiesMenu.Default.Link.Dropdown.57413.click,click">
                                                                                            <div style="pointer-events:auto;display:flex;align-items:center"
                                                                                                data-aid="MEMBERSHIP_ICON_DESKTOP_RENDERED">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    fill="currentColor"
                                                                                                    width="40px"
                                                                                                    height="40px"
                                                                                                    data-ux="UtilitiesMenuIcon"
                                                                                                    data-typography="NavAlpha"
                                                                                                    class="x-el x-el-svg c1-1 c1-3t c1-2b c1-2c c1-5q c1-5r c1-2y c1-2e c1-2f c1-2g c1-2h c1-3l c1-m c1-b c1-c c1-3u c1-2v c1-3v c1-d c1-e c1-f c1-g">
                                                                                                    <path
                                                                                                        fill-rule="evenodd"
                                                                                                        d="M19.62 19.29l.026.71h-2.421l-.028-.658c-.119-2.71-2.48-4.833-5.374-4.833-2.894 0-5.254 2.123-5.373 4.833L6.421 20H4l.027-.71c.098-2.56 1.658-4.896 4.04-6.135-1.169-.99-1.848-2.402-1.848-3.9C6.219 6.357 8.733 4 11.823 4c3.09 0 5.605 2.357 5.605 5.255 0 1.497-.68 2.909-1.85 3.9 2.383 1.239 3.944 3.574 4.041 6.135zM11.822 6.273c-1.754 0-3.18 1.338-3.18 2.982 0 1.645 1.426 2.982 3.18 2.982 1.754 0 3.18-1.337 3.18-2.982 0-1.644-1.426-2.982-3.18-2.982z">
                                                                                                    </path>
                                                                                                </svg></div>
                                                                                        </a></div>
                                                                                </span>
                                                                                <div data-ux="Block"
                                                                                    class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                                    <script>
                                                                                        < !--googleoff: all -->
                                                                                    </script>
                                                                                    <ul data-ux="Dropdown" role="menu"
                                                                                        id="n-5737957407-membershipId-loggedout"
                                                                                        class="x-el x-el-ul membership-sign-out c1-1 c1-2 c1-4v c1-4w c1-3 c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-5s c1-4c c1-5t c1-55 c1-3w c1-56 c1-5u c1-b c1-c c1-57 c1-58 c1-d c1-e c1-f c1-g">
                                                                                        <li data-ux="ListItem"
                                                                                            role="menuitem"
                                                                                            class="x-el x-el-li c1-1 c1-2 c1-5v c1-5w c1-4g c1-41 c1-20 c1-q c1-5x c1-r c1-5y c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                            <a rel="" role="link"
                                                                                                aria-haspopup="false"
                                                                                                data-ux="UtilitiesMenuLink"
                                                                                                data-edit-interactive="true"
                                                                                                id="n-5737957407-membership-sign-in"
                                                                                                aria-labelledby="n-5737957407-membershipId-loggedout"
                                                                                                href="/m/account"
                                                                                                data-typography="NavAlpha"
                                                                                                class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2s c1-20 c1-3l c1-b c1-5e c1-c c1-3u c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                                data-tccl="ux2.HEADER.header9.UtilitiesMenu.Menu.Link.Default.57414.click,click">Iniciar
                                                                                                sesión</a></li>
                                                                                        <li data-ux="ListItem"
                                                                                            role="menuitem"
                                                                                            class="x-el x-el-li c1-1 c1-2 c1-5v c1-5w c1-4g c1-41 c1-20 c1-q c1-5x c1-r c1-5y c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                            <a rel="" role="link"
                                                                                                aria-haspopup="false"
                                                                                                data-ux="UtilitiesMenuLink"
                                                                                                data-edit-interactive="true"
                                                                                                id="n-5737957407-membership-create-account"
                                                                                                aria-labelledby="n-5737957407-membershipId-loggedout"
                                                                                                href="/m/create-account"
                                                                                                data-typography="NavAlpha"
                                                                                                class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2s c1-20 c1-3l c1-b c1-5e c1-c c1-3u c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                                data-tccl="ux2.HEADER.header9.UtilitiesMenu.Menu.Link.Default.57415.click,click">Crear
                                                                                                cuenta</a></li>
                                                                                        <li data-ux="ListItem"
                                                                                            role="menuitem"
                                                                                            class="x-el x-el-li c1-1 c1-2 c1-59 c1-1c c1-4g c1-41 c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                            <hr aria-hidden="true"
                                                                                                role="separator"
                                                                                                data-ux="HR"
                                                                                                class="x-el x-el-hr c1-1 c1-2 c1-5z c1-4q c1-60 c1-61 c1-5w c1-4 c1-b c1-c c1-d c1-e c1-f c1-g" />
                                                                                        </li>
                                                                                        <li data-ux="ListItem"
                                                                                            role="menuitem"
                                                                                            class="x-el x-el-li c1-1 c1-2 c1-5v c1-5w c1-4g c1-41 c1-20 c1-q c1-5x c1-r c1-5y c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                            <a rel="" role="link"
                                                                                                aria-haspopup="false"
                                                                                                data-ux="UtilitiesMenuLink"
                                                                                                data-edit-interactive="true"
                                                                                                id="n-5737957407-membership-bookings-logged-out"
                                                                                                aria-labelledby="n-5737957407-membershipId-loggedout"
                                                                                                href="/m/bookings"
                                                                                                data-typography="NavAlpha"
                                                                                                class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2s c1-20 c1-3l c1-b c1-5e c1-c c1-3u c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                                data-tccl="ux2.HEADER.header9.UtilitiesMenu.Menu.Link.Default.57416.click,click">Reservaciones</a>
                                                                                        </li>
                                                                                        <li data-ux="ListItem"
                                                                                            role="menuitem"
                                                                                            class="x-el x-el-li c1-1 c1-2 c1-5v c1-5w c1-4g c1-41 c1-20 c1-q c1-5x c1-r c1-5y c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                            <a rel="" role="link"
                                                                                                aria-haspopup="false"
                                                                                                data-ux="UtilitiesMenuLink"
                                                                                                data-edit-interactive="true"
                                                                                                id="n-5737957407-membership-orders-logged-out"
                                                                                                aria-labelledby="n-5737957407-membershipId-loggedout"
                                                                                                href="/m/orders"
                                                                                                data-typography="NavAlpha"
                                                                                                class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2s c1-20 c1-3l c1-b c1-5e c1-c c1-3u c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                                data-tccl="ux2.HEADER.header9.UtilitiesMenu.Menu.Link.Default.57417.click,click">Pedidos</a>
                                                                                        </li>
                                                                                        <li data-ux="ListItem"
                                                                                            role="menuitem"
                                                                                            class="x-el x-el-li c1-1 c1-2 c1-5v c1-5w c1-4g c1-41 c1-20 c1-q c1-5x c1-r c1-5y c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                            <a rel="" role="link"
                                                                                                aria-haspopup="false"
                                                                                                data-ux="UtilitiesMenuLink"
                                                                                                data-edit-interactive="true"
                                                                                                id="n-5737957407-membership-account-logged-out"
                                                                                                aria-labelledby="n-5737957407-membershipId-loggedout"
                                                                                                href="/m/account"
                                                                                                data-typography="NavAlpha"
                                                                                                class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2s c1-20 c1-3l c1-b c1-5e c1-c c1-3u c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                                data-tccl="ux2.HEADER.header9.UtilitiesMenu.Menu.Link.Default.57418.click,click">Mi
                                                                                                cuenta</a></li>
                                                                                    </ul>
                                                                                    <ul data-ux="Dropdown" role="menu"
                                                                                        id="n-5737957407-membershipId"
                                                                                        class="x-el x-el-ul membership-sign-in c1-1 c1-2 c1-4v c1-4w c1-3 c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-5s c1-4c c1-5t c1-55 c1-3w c1-56 c1-5u c1-b c1-c c1-57 c1-58 c1-d c1-e c1-f c1-g">
                                                                                        <li data-ux="ListItem"
                                                                                            role="menuitem"
                                                                                            class="x-el x-el-li c1-1 c1-2 c1-59 c1-1c c1-4g c1-41 c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                            <p data-ux="Text"
                                                                                                id="n-5737957407-membership-header"
                                                                                                data-typography="BodyAlpha"
                                                                                                class="x-el x-el-p c1-1 c1-2 c1-1y c1-1z c1-5d c1-1a c1-5w c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-b c1-4s c1-59 c1-c c1-d c1-e c1-f c1-g">
                                                                                                Iniciaste sesión como:
                                                                                            </p>
                                                                                        </li>
                                                                                        <li data-ux="ListItem"
                                                                                            role="menuitem"
                                                                                            class="x-el x-el-li c1-1 c1-2 c1-5v c1-5w c1-4g c1-41 c1-20 c1-q c1-5x c1-r c1-5y c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                            <p data-ux="Text"
                                                                                                id="n-5737957407-membership-email"
                                                                                                data-aid="MEMBERSHIP_EMAIL_ADDRESS"
                                                                                                data-typography="BodyAlpha"
                                                                                                class="x-el x-el-p c1-1 c1-2 c1-1y c1-1z c1-5d c1-1a c1-1c c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-b c1-59 c1-c c1-3u c1-d c1-e c1-f c1-g">
                                                                                                filler@godaddy.com</p>
                                                                                        </li>
                                                                                        <li data-ux="ListItem"
                                                                                            role="menuitem"
                                                                                            class="x-el x-el-li c1-1 c1-2 c1-59 c1-1c c1-4g c1-41 c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                            <hr aria-hidden="true"
                                                                                                role="separator"
                                                                                                data-ux="HR"
                                                                                                class="x-el x-el-hr c1-1 c1-2 c1-5z c1-4q c1-60 c1-61 c1-5w c1-4 c1-b c1-c c1-d c1-e c1-f c1-g" />
                                                                                        </li>
                                                                                        <li data-ux="ListItem"
                                                                                            role="menuitem"
                                                                                            class="x-el x-el-li c1-1 c1-2 c1-5v c1-5w c1-4g c1-41 c1-20 c1-q c1-5x c1-r c1-5y c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                            <a rel="" role="link"
                                                                                                aria-haspopup="false"
                                                                                                data-ux="UtilitiesMenuLink"
                                                                                                data-edit-interactive="true"
                                                                                                id="n-5737957407-membership-bookings-logged-in"
                                                                                                aria-labelledby="n-5737957407-membershipId"
                                                                                                href="/m/bookings"
                                                                                                data-typography="NavAlpha"
                                                                                                class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2s c1-20 c1-3l c1-b c1-5e c1-c c1-3u c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                                data-tccl="ux2.HEADER.header9.UtilitiesMenu.Menu.Link.Default.57419.click,click">Reservaciones</a>
                                                                                        </li>
                                                                                        <li data-ux="ListItem"
                                                                                            role="menuitem"
                                                                                            class="x-el x-el-li c1-1 c1-2 c1-5v c1-5w c1-4g c1-41 c1-20 c1-q c1-5x c1-r c1-5y c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                            <a rel="" role="link"
                                                                                                aria-haspopup="false"
                                                                                                data-ux="UtilitiesMenuLink"
                                                                                                data-edit-interactive="true"
                                                                                                id="n-5737957407-membership-orders-logged-in"
                                                                                                aria-labelledby="n-5737957407-membershipId"
                                                                                                href="/m/orders"
                                                                                                data-typography="NavAlpha"
                                                                                                class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2s c1-20 c1-3l c1-b c1-5e c1-c c1-3u c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                                data-tccl="ux2.HEADER.header9.UtilitiesMenu.Menu.Link.Default.57420.click,click">Pedidos</a>
                                                                                        </li>
                                                                                        <li data-ux="ListItem"
                                                                                            role="menuitem"
                                                                                            class="x-el x-el-li c1-1 c1-2 c1-5v c1-5w c1-4g c1-41 c1-20 c1-q c1-5x c1-r c1-5y c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                            <a rel="" role="link"
                                                                                                aria-haspopup="false"
                                                                                                data-ux="UtilitiesMenuLink"
                                                                                                data-edit-interactive="true"
                                                                                                id="n-5737957407-membership-account-logged-in"
                                                                                                aria-labelledby="n-5737957407-membershipId"
                                                                                                href="/m/account"
                                                                                                data-typography="NavAlpha"
                                                                                                class="x-el x-el-a c1-1 c1-3t c1-1x c1-1y c1-1z c1-2s c1-20 c1-3l c1-b c1-5e c1-c c1-3u c1-5f c1-3v c1-d c1-e c1-f c1-g"
                                                                                                data-tccl="ux2.HEADER.header9.UtilitiesMenu.Menu.Link.Default.57421.click,click">Mi
                                                                                                cuenta</a></li>
                                                                                        <li data-ux="ListItem"
                                                                                            role="menuitem"
                                                                                            class="x-el x-el-li c1-1 c1-2 c1-5v c1-5w c1-4g c1-41 c1-20 c1-q c1-5x c1-r c1-5y c1-b c1-c c1-5a c1-d c1-e c1-f c1-g">
                                                                                            <p data-ux="Text"
                                                                                                id="n-5737957407-membership-sign-out"
                                                                                                data-aid="MEMBERSHIP_SIGNOUT_LINK"
                                                                                                data-typography="BodyAlpha"
                                                                                                class="x-el x-el-p c1-1 c1-2 c1-1y c1-1z c1-5d c1-1a c1-1c c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-b c1-59 c1-c c1-3u c1-d c1-e c1-f c1-g">
                                                                                                Cerrar sesión</p>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <script>
                                                                                        < !--googleon: all -->
                                                                                    </script>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nav>
                                            <hr aria-hidden="true" role="separator" data-ux="HR"
                                                class="x-el x-el-hr c1-1 c1-2 c1-5z c1-4q c1-60 c1-1a c1-1c c1-4 c1-44 c1-27 c1-b c1-c c1-d c1-e c1-f c1-g" />
                                        </div>
                                    </div>
                                    <div role="navigation" data-ux="NavigationDrawer" id="n-57379-navId-mobile"
                                        domainName="turiscabos.com" pageRoute="/faq%C2%B4s"
                                        class="x-el x-el-div c1-1 c1-2 c1-6i c1-6j c1-6k c1-4 c1-6l c1-6m c1-55 c1-6n c1-h c1-6o c1-6p c1-6q c1-6r c1-6s c1-16 c1-6t c1-b c1-c c1-d c1-e c1-f c1-g">
                                        <div data-ux="Block"
                                            class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-1j c1-e c1-f c1-g"></div>
                                        <div data-ux="Block"
                                            class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-b c1-c c1-d c1-e c1-f c1-g">
                                            <div data-ux="Membership"
                                                class="x-el x-el-div membership-header-logged-in c1-1 c1-2 c1-6u c1-b c1-c c1-d c1-e c1-f c1-g">
                                                <div data-ux="Container"
                                                    class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g">
                                                    <p data-ux="TextMajor" id="n-57379-membership-header"
                                                        data-typography="BodyAlpha"
                                                        class="x-el x-el-p c1-1 c1-2 c1-1y c1-1z c1-5d c1-1a c1-1c c1-6v c1-b c1-6w c1-c c1-3u c1-d c1-e c1-f c1-g">
                                                        Iniciaste sesión como:</p>
                                                    <p data-ux="Text" id="n-57379-membership-email"
                                                        data-typography="BodyAlpha"
                                                        class="x-el x-el-p c1-1 c1-2 c1-1y c1-1z c1-5d c1-1a c1-1c c1-b c1-6w c1-c c1-3u c1-d c1-e c1-f c1-g">
                                                        filler@godaddy.com</p>
                                                </div>
                                            </div><svg viewBox="0 0 24 24" fill="currentColor" width="40px"
                                                height="40px" data-ux="CloseIcon" data-edit-interactive="true"
                                                data-close="true"
                                                class="x-el x-el-svg c1-1 c1-2 c1-6x c1-2c c1-2y c1-2e c1-2f c1-2g c1-2h c1-20 c1-6y c1-6z c1-51 c1-70 c1-71 c1-72 c1-b c1-29 c1-73 c1-74 c1-75 c1-76">
                                                <path fill-rule="evenodd"
                                                    d="M17.999 4l-6.293 6.293L5.413 4 4 5.414l6.292 6.293L4 18l1.413 1.414 6.293-6.292 6.293 6.292L19.414 18l-6.294-6.293 6.294-6.293z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div data-ux="Container" id="n-57379-navContainerId-mobile"
                                            class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-55 c1-77 c1-4 c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g">
                                            <div data-ux="Block" id="n-57379-navLinksContentId-mobile"
                                                class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                <ul role="menu" data-ux="NavigationDrawerList"
                                                    id="n-57379-navListId-mobile"
                                                    class="x-el x-el-ul c1-1 c1-2 c1-1a c1-1c c1-27 c1-44 c1-45 c1-46 c1-47 c1-41 c1-1n c1-1p c1-2w c1-1o c1-1y c1-1z c1-b c1-c c1-d c1-e c1-f c1-g">
                                                    <li role="menuitem" data-ux="NavigationDrawerListItem"
                                                        class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                        <a rel="" role="link" aria-haspopup="false"
                                                            data-ux="NavigationDrawerLink" target=""
                                                            data-page="e98f1128-c137-4a7b-aa3d-6d15319022ac"
                                                            data-edit-interactive="true" data-close="true" href="/home"
                                                            data-typography="NavBeta"
                                                            class="x-el x-el-a c1-1 c1-2 c1-1x c1-1y c1-1z c1-16 c1-20 c1-4x c1-4y c1-x c1-y c1-1e c1-7b c1-7c c1-b c1-6x c1-7d c1-3u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k"
                                                            data-tccl="ux2.HEADER.header9.NavigationDrawer.Default.Link.Default.57422.click,click"><span>Home</span></a>
                                                    </li>
                                                    <li role="menuitem" data-ux="NavigationDrawerListItem"
                                                        class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                        <a rel="" role="link" aria-haspopup="false"
                                                            data-ux="NavigationDrawerLink" target=""
                                                            data-page="1def3029-36ae-4e5f-be4b-f3aa97ad37cb"
                                                            data-edit-interactive="true" data-close="true"
                                                            href="/services" data-typography="NavBeta"
                                                            class="x-el x-el-a c1-1 c1-2 c1-1x c1-1y c1-1z c1-16 c1-20 c1-4x c1-4y c1-x c1-y c1-1e c1-7b c1-7c c1-b c1-6x c1-7d c1-3u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k"
                                                            data-tccl="ux2.HEADER.header9.NavigationDrawer.Default.Link.Default.57423.click,click"><span>SERVICES</span></a>
                                                    </li>
                                                    <li role="menuitem" data-ux="NavigationDrawerListItem"
                                                        class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                        <a rel="" role="link" aria-haspopup="false"
                                                            data-ux="NavigationDrawerLink" target=""
                                                            data-page="ab973aed-cf45-4988-a6fa-a6cf15f1d95e"
                                                            data-edit-interactive="true" data-close="true"
                                                            href="/about-us" data-typography="NavBeta"
                                                            class="x-el x-el-a c1-1 c1-2 c1-1x c1-1y c1-1z c1-16 c1-20 c1-4x c1-4y c1-x c1-y c1-1e c1-7b c1-7c c1-b c1-6x c1-7d c1-3u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k"
                                                            data-tccl="ux2.HEADER.header9.NavigationDrawer.Default.Link.Default.57424.click,click"><span>About
                                                                Us</span></a></li>
                                                    <li role="menuitem" data-ux="NavigationDrawerListItem"
                                                        class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                        <a rel="" role="link" aria-haspopup="false"
                                                            data-ux="NavigationDrawerLink" target=""
                                                            data-page="5789847b-57a4-45e0-8036-df34c5b63fb5"
                                                            data-edit-interactive="true" data-close="true"
                                                            href="/gallery" data-typography="NavBeta"
                                                            class="x-el x-el-a c1-1 c1-2 c1-1x c1-1y c1-1z c1-16 c1-20 c1-4x c1-4y c1-x c1-y c1-1e c1-7b c1-7c c1-b c1-6x c1-7d c1-3u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k"
                                                            data-tccl="ux2.HEADER.header9.NavigationDrawer.Default.Link.Default.57425.click,click"><span>Gallery</span></a>
                                                    </li>
                                                    <li role="menuitem" data-ux="NavigationDrawerListItem"
                                                        class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                        <a rel="" role="link" aria-haspopup="false"
                                                            data-ux="NavigationDrawerLink" target=""
                                                            data-page="ac4c9a95-588c-4728-a527-abb41117700a"
                                                            data-edit-interactive="true" data-close="true"
                                                            href="/contact" data-typography="NavBeta"
                                                            class="x-el x-el-a c1-1 c1-2 c1-1x c1-1y c1-1z c1-16 c1-20 c1-4x c1-4y c1-x c1-y c1-1e c1-7b c1-7c c1-b c1-6x c1-7d c1-3u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k"
                                                            data-tccl="ux2.HEADER.header9.NavigationDrawer.Default.Link.Default.57426.click,click"><span>Contact</span></a>
                                                    </li>
                                                    <li role="menuitem" data-ux="NavigationDrawerListItem"
                                                        class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                        <a rel="" role="link" aria-haspopup="false"
                                                            data-ux="NavigationDrawerLinkActive" target=""
                                                            data-page="5ace6a3a-ccbb-4bcd-9a15-a1c48a097c2a"
                                                            data-edit-interactive="true" data-close="true"
                                                            href="/faq%C2%B4s" data-typography="NavBeta"
                                                            class="x-el x-el-a c1-1 c1-2 c1-1x c1-1y c1-1z c1-16 c1-20 c1-4x c1-4y c1-x c1-y c1-1e c1-7b c1-7c c1-b c1-6x c1-7d c1-4s c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k"
                                                            data-tccl="ux2.HEADER.header9.NavigationDrawer.Default.Link.Active.57427.click,click"><span>FAQ´S</span></a>
                                                    </li>
                                                </ul>
                                                <div data-ux="Block"
                                                    class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-4g c1-d c1-1j c1-e c1-f c1-g">
                                                    <div data-ux="Block"
                                                        class="x-el x-el-div c1-1 c1-2 c1-m c1-7l c1-b c1-c c1-d c1-e c1-f c1-g">
                                                        <div data-ux="Element" id="bs-8"
                                                            class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                            <div data-ux="Block"
                                                                class="x-el x-el-div c1-1 c1-2 c1-16 c1-1e c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                <div data-ux="Block" data-aid="SEARCH_FORM_RENDERED"
                                                                    class="x-el x-el-div c1-1 c1-2 c1-4 c1-16 c1-1e c1-m c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                    <div data-ux="Block"
                                                                        class="x-el x-el-div c1-1 c1-2 c1-16 c1-1e c1-q c1-r c1-4 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                                        <form aria-live="polite" data-ux="FormSearch"
                                                                            class="x-el x-el-form c1-1 c1-2 c1-1c c1-4 c1-b c1-c c1-d c1-7m c1-7n c1-7o c1-7p c1-7q c1-e c1-f c1-g">
                                                                            <input role="searchbox"
                                                                                aria-multiline="false"
                                                                                data-ux="NavigationDrawerInputSearch"
                                                                                id="Search57428-input"
                                                                                data-aid="SEARCH_FIELD_RENDERED"
                                                                                value="" autoComplete="off"
                                                                                aria-autocomplete="none" name="keywords"
                                                                                placeholder="Buscar Productos"
                                                                                aria-label="Buscar Productos"
                                                                                searchFormLocation="NAV_DRAWER"
                                                                                data-typography="InputAlpha"
                                                                                class="x-el x-el-input c1-1 c1-2 c1-7r c1-7s c1-4 c1-7t c1-7u c1-7v c1-7w c1-4y c1-7x c1-7y c1-4x c1-32 c1-60 c1-b c1-7z c1-80 c1-3u c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-87 c1-88 c1-89" />
                                                                        </form><svg viewBox="0 0 24 24"
                                                                            fill="currentColor" width="28" height="28"
                                                                            data-ux="IconSearch"
                                                                            data-aid="SEARCH_ICON_RENDERED_OPEN"
                                                                            class="x-el x-el-svg c1-1 c1-2 c1-2b c1-2c c1-2y c1-20 c1-51 c1-n c1-b c1-c c1-8a c1-8b c1-8c c1-8d c1-8e c1-8f c1-d c1-e c1-f c1-g">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16.083 14.688l3.833 3.764-1.481 1.455-3.878-3.807a6.746 6.746 0 0 1-3.808 1.167C7.028 17.267 4 14.29 4 10.633 4 6.976 7.028 4 10.75 4c3.72 0 6.748 2.976 6.748 6.633 0 1.467-.5 2.894-1.415 4.055zm-.673-4.055c0-2.52-2.09-4.569-4.66-4.569-2.57 0-4.66 2.05-4.66 4.57 0 2.519 2.09 4.569 4.66 4.569 2.57 0 4.66-2.05 4.66-4.57z">
                                                                            </path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-ux="Membership"
                                                        class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                        <p data-ux="MembershipHeading" data-typography="BodyAlpha"
                                                            class="x-el x-el-p c1-1 c1-2 c1-1y c1-1z c1-5d c1-5b c1-5c c1-x c1-y c1-1p c1-8g c1-b c1-6w c1-c c1-3u c1-d c1-e c1-f c1-g">
                                                            Cuenta</p>
                                                        <ul data-ux="List" role="menu"
                                                            class="x-el x-el-ul membership-links-logged-in c1-1 c1-2 c1-1a c1-1c c1-27 c1-44 c1-45 c1-46 c1-47 c1-41 c1-1n c1-1p c1-2w c1-1o c1-1y c1-1z c1-b c1-c c1-d c1-e c1-f c1-g">
                                                            <li role="menuitem" data-ux="MembershipListItem"
                                                                class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                                <hr aria-hidden="true" role="separator"
                                                                    data-ux="MembershipHR"
                                                                    class="x-el x-el-hr c1-1 c1-2 c1-8h c1-4q c1-60 c1-1a c1-1c c1-4 c1-b c1-c c1-d c1-e c1-f c1-g" />
                                                            </li>
                                                            <li role="menuitem" data-ux="MembershipListItem"
                                                                class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                                <a rel="" role="link" aria-haspopup="false"
                                                                    data-ux="MembershipLink"
                                                                    data-edit-interactive="true"
                                                                    id="n-57379-membership-bookings-logged-in"
                                                                    name="Reservaciones"
                                                                    dataAid="MEMBERSHIP_BOOKINGS_LINK"
                                                                    href="/m/bookings" data-typography="NavBeta"
                                                                    class="x-el x-el-a c1-1 c1-2 c1-1x c1-1y c1-1z c1-16 c1-20 c1-4x c1-4y c1-x c1-y c1-1e c1-7b c1-7c c1-b c1-6x c1-7d c1-3u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k"
                                                                    data-tccl="ux2.HEADER.header9.Membership.Default.Link.Default.57439.click,click">Reservaciones</a>
                                                            </li>
                                                            <li role="menuitem" data-ux="MembershipListItem"
                                                                class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                                <a rel="" role="link" aria-haspopup="false"
                                                                    data-ux="MembershipLink"
                                                                    data-edit-interactive="true"
                                                                    id="n-57379-membership-orders-logged-in"
                                                                    name="Pedidos" dataAid="MEMBERSHIP_ORDERS_LINK"
                                                                    href="/m/orders" data-typography="NavBeta"
                                                                    class="x-el x-el-a c1-1 c1-2 c1-1x c1-1y c1-1z c1-16 c1-20 c1-4x c1-4y c1-x c1-y c1-1e c1-7b c1-7c c1-b c1-6x c1-7d c1-3u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k"
                                                                    data-tccl="ux2.HEADER.header9.Membership.Default.Link.Default.57440.click,click">Pedidos</a>
                                                            </li>
                                                            <li role="menuitem" data-ux="MembershipListItem"
                                                                class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                                <a rel="" role="link" aria-haspopup="false"
                                                                    data-ux="MembershipLink"
                                                                    data-edit-interactive="true"
                                                                    id="n-57379-membership-account-logged-in"
                                                                    name="Mi cuenta" dataAid="MEMBERSHIP_ACCOUNT_LINK"
                                                                    href="/m/account" data-typography="NavBeta"
                                                                    class="x-el x-el-a c1-1 c1-2 c1-1x c1-1y c1-1z c1-16 c1-20 c1-4x c1-4y c1-x c1-y c1-1e c1-7b c1-7c c1-b c1-6x c1-7d c1-3u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k"
                                                                    data-tccl="ux2.HEADER.header9.Membership.Default.Link.Default.57441.click,click">Mi
                                                                    cuenta</a></li>
                                                            <li role="menuitem" data-ux="MembershipListItem"
                                                                class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                                <p data-ux="Text" id="n-57379-membership-sign-out"
                                                                    data-aid="MEMBERSHIP_SIGNOUT_LINK"
                                                                    data-typography="BodyAlpha"
                                                                    class="x-el x-el-p c1-1 c1-2 c1-1y c1-1z c1-5d c1-1a c1-1c c1-b c1-6w c1-c c1-3u c1-d c1-e c1-f c1-g">
                                                                    Cerrar sesión</p>
                                                            </li>
                                                        </ul>
                                                        <ul data-ux="List" role="menu"
                                                            class="x-el x-el-ul membership-links-logged-out c1-1 c1-2 c1-1a c1-1c c1-27 c1-44 c1-45 c1-46 c1-47 c1-41 c1-1n c1-1p c1-2w c1-1o c1-1y c1-1z c1-b c1-c c1-d c1-e c1-f c1-g">
                                                            <li role="menuitem" data-ux="MembershipListItem"
                                                                class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                                <hr aria-hidden="true" role="separator"
                                                                    data-ux="MembershipHR"
                                                                    class="x-el x-el-hr c1-1 c1-2 c1-8h c1-4q c1-60 c1-1a c1-1c c1-4 c1-b c1-c c1-d c1-e c1-f c1-g" />
                                                            </li>
                                                            <li role="menuitem" data-ux="MembershipListItem"
                                                                class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                                <a rel="" role="link" aria-haspopup="false"
                                                                    data-ux="MembershipLink"
                                                                    data-edit-interactive="true"
                                                                    id="n-57379-membership-sign-in"
                                                                    name="Iniciar sesión"
                                                                    dataAid="MEMBERSHIP_SIGNIN_LINK" href="/m/account"
                                                                    data-typography="NavBeta"
                                                                    class="x-el x-el-a c1-1 c1-2 c1-1x c1-1y c1-1z c1-16 c1-20 c1-4x c1-4y c1-x c1-y c1-1e c1-7b c1-7c c1-b c1-6x c1-7d c1-3u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k"
                                                                    data-tccl="ux2.HEADER.header9.Membership.Default.Link.Default.57442.click,click">Iniciar
                                                                    sesión</a></li>
                                                            <li role="menuitem" data-ux="MembershipListItem"
                                                                class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                                <a rel="" role="link" aria-haspopup="false"
                                                                    data-ux="MembershipLink"
                                                                    data-edit-interactive="true"
                                                                    id="n-57379-membership-bookings-logged-out"
                                                                    name="Reservaciones"
                                                                    dataAid="MEMBERSHIP_BOOKINGS_LINK"
                                                                    href="/m/bookings" data-typography="NavBeta"
                                                                    class="x-el x-el-a c1-1 c1-2 c1-1x c1-1y c1-1z c1-16 c1-20 c1-4x c1-4y c1-x c1-y c1-1e c1-7b c1-7c c1-b c1-6x c1-7d c1-3u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k"
                                                                    data-tccl="ux2.HEADER.header9.Membership.Default.Link.Default.57443.click,click">Reservaciones</a>
                                                            </li>
                                                            <li role="menuitem" data-ux="MembershipListItem"
                                                                class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                                <a rel="" role="link" aria-haspopup="false"
                                                                    data-ux="MembershipLink"
                                                                    data-edit-interactive="true"
                                                                    id="n-57379-membership-orders-logged-out"
                                                                    name="Pedidos" dataAid="MEMBERSHIP_ORDERS_LINK"
                                                                    href="/m/orders" data-typography="NavBeta"
                                                                    class="x-el x-el-a c1-1 c1-2 c1-1x c1-1y c1-1z c1-16 c1-20 c1-4x c1-4y c1-x c1-y c1-1e c1-7b c1-7c c1-b c1-6x c1-7d c1-3u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k"
                                                                    data-tccl="ux2.HEADER.header9.Membership.Default.Link.Default.57444.click,click">Pedidos</a>
                                                            </li>
                                                            <li role="menuitem" data-ux="MembershipListItem"
                                                                class="x-el x-el-li c1-1 c1-2 c1-6w c1-1c c1-4g c1-78 c1-79 c1-4l c1-b c1-c c1-5a c1-7a c1-d c1-e c1-f c1-g">
                                                                <a rel="" role="link" aria-haspopup="false"
                                                                    data-ux="MembershipLink"
                                                                    data-edit-interactive="true"
                                                                    id="n-57379-membership-account-logged-out"
                                                                    name="Mi cuenta" dataAid="MEMBERSHIP_ACCOUNT_LINK"
                                                                    href="/m/account" data-typography="NavBeta"
                                                                    class="x-el x-el-a c1-1 c1-2 c1-1x c1-1y c1-1z c1-16 c1-20 c1-4x c1-4y c1-x c1-y c1-1e c1-7b c1-7c c1-b c1-6x c1-7d c1-3u c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k"
                                                                    data-tccl="ux2.HEADER.header9.Membership.Default.Link.Default.57445.click,click">Mi
                                                                    cuenta</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div id="53891e85-9849-4f74-8eee-65752685857e" class="widget widget-content widget-content-content-6">
                    <div data-ux="Widget" role="region" id="53891e85-9849-4f74-8eee-65752685857e"
                        class="x-el x-el-div x-el c1-1 c1-2 c1-8i c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                        <div>
                            <section data-ux="Section"
                                class="x-el x-el-section c1-1 c1-2 c1-8i c1-h c1-i c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g">
                                <div data-ux="Container"
                                    class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g">
                                    <h1 role="heading" aria-level="1" data-ux="SectionHeading"
                                        data-aid="CONTENT_SECTION_TITLE_RENDERED" data-promoted-from="2" data-order="0"
                                        data-typography="HeadingBeta"
                                        class="x-el x-el-h1 c1-1 c1-2 c1-1y c1-1z c1-8j c1-27 c1-44 c1-1a c1-8k c1-2l c1-2m c1-8l c1-2u c1-3u c1-8m c1-8n c1-8o c1-8p c1-8q">
                                        <span data-ux="Element" class="">Los Cabos Airport shuttle (FAQ´S)</span></h1>
                                    <div data-ux="Grid"
                                        class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-8v c1-1a c1-1b c1-1c c1-1d c1-41 c1-8w c1-b c1-c c1-1f c1-1g c1-1h c1-1i c1-d c1-e c1-f c1-g">
                                        <div data-ux="GridCell"
                                            class="x-el x-el-div c1-1 c1-2 c1-17 c1-2i c1-1l c1-8x c1-z c1-1n c1-2k c1-1p c1-1q c1-8y c1-b c1-c c1-8z c1-90 c1-1r c1-1s c1-1t c1-1u c1-d c1-91 c1-92 c1-93 c1-e c1-f c1-g">
                                            <div data-ux="ContentBasic"
                                                class="x-el x-el-div x-el c1-1 c1-2 c1-16 c1-6t c1-4 c1-94 c1-95 c1-41 c1-96 c1-97 c1-b c1-c c1-98 c1-99 c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                                <h4 role="heading" aria-level="4" data-ux="ContentHeading"
                                                    data-aid="CONTENT_MEDIA_HEADLINE1_RENDERED"
                                                    data-typography="HeadingDelta"
                                                    class="x-el x-el-h4 c1-1 c1-2 c1-1y c1-1z c1-9a c1-27 c1-44 c1-1a c1-1c c1-b c1-6x c1-7d c1-3u c1-7g c1-7i c1-7j c1-7k">
                                                    Información adicional</h4>
                                                <div data-ux="ContentText" alignment="left"
                                                    data-aid="CONTENT_MEDIA_DESCRIPTION1_RENDERED"
                                                    data-typography="BodyAlpha"
                                                    class="x-el c1-1 c1-2 c1-1y c1-1z c1-5d c1-1a c1-1c c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-9s c1-9t c1-9u c1-9v c1-9w c1-9x c1-9y c1-9z c1-a0 c1-a1 c1-a2 c1-2i c1-b c1-6w c1-c c1-3u c1-d c1-e c1-f c1-g x-rt">
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g">FAQ´S</span>
                                                    </p>
                                                    <p style="margin:0"><span><br></span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">Why
                                                                Turiscabos?&nbsp;
                                                            </strong></span></p>
                                                    <p style="margin:0"><span>We are always ready,
                                                            always on time ! And provide a professional and safe
                                                            transportation from Los Cabos International Airport to any
                                                            hotel or destination you may want to go around Los Cabos.
                                                            All our drivers are very friendly and bilingual spoken. We
                                                            are the official taxi company at the Airport.</span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><br></span>
                                                    </p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">Can
                                                                I make a stop at the supermarket?</strong></span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g">los
                                                            cabos transfer private services are applicable for a
                                                            shopping stop at the supermarket for 30 to 40 minutes at
                                                            most.</span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g">What
                                                            about shuttle?&nbsp;
                                                        </span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g">los
                                                            cabos airport shuttle is a shared transfer quoted per
                                                            person. Keep on mind you might wait about 30 minutes to
                                                            go.</span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><br></span>
                                                    </p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">How
                                                                much time do I have to change my departure without make
                                                                any extra charge?</strong></span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g">48
                                                            hours in advance</span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><br></span>
                                                    </p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">What
                                                                if my flight is delayed or I get hung up in
                                                                customs?</strong></span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g">Dot
                                                            worry ! we will be waiting for you at whatever time your
                                                            flight arrives.</span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><br></span>
                                                    </p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">How
                                                                do I pay for my transfer?</strong></span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g">You
                                                            can pay with credit card or debit card. we accept
                                                            MasterCard,
                                                            Visa and Amex.&nbsp;
                                                        </span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><br></span>
                                                    </p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">Do
                                                                you charge for Kids the same rate as
                                                                Adults?</strong></span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g">We
                                                            charge per seatbelt - if your kids will occupy a seatbelt,
                                                            then the charge is the same. If you want to hold your small
                                                            kids ages 2 and under on your lap,
                                                            then there is no charge for them.</span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><br></span>
                                                    </p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">How
                                                                Much luggage entitlement will I have?</strong></span>
                                                    </p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">That
                                                                depends on the type of airport transfer you
                                                                book.</strong></span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">Private
                                                                sedan </strong>No suitcases limitation per
                                                            vehicle.&nbsp;
                                                        </span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">Shared
                                                                shuttles </strong>allow max 2 suitcases per person or 25
                                                            kilograms.&nbsp;
                                                        </span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">Private
                                                                van </strong>No suitcases limitation per vehicle.&nbsp;
                                                        </span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">Private
                                                                Escalade/Suburban </strong>No suitcases limitation per
                                                            vehicle.&nbsp;
                                                        </span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">Limousine
                                                                Luxury </strong>No suitcases limitation per
                                                            Limousine.</span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><br></span>
                                                    </p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">Where
                                                                will I meet the driver when I arrive?</strong></span>
                                                    </p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g">Your
                                                            driver will stand outside the arrivals gate holding a sign
                                                            with your name on it.</span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">What
                                                                happens if I can’t locate my driver?</strong></span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g">In
                                                            advance you will receive contact information by e-mail with
                                                            your reservation just in case.</span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><br></span>
                                                    </p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">How
                                                                long will the transfer take?</strong></span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g">We
                                                            take the fastest roads to take you as soon as possible but
                                                            it depends on which hotel you going to stay. It can take
                                                            from 10 minutes to 45 minutes.</span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><br></span>
                                                    </p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">Cancellation
                                                                Policies</strong></span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g">Cancellations
                                                            must be made with 48 hours before you arrive to the airport
                                                            for a 100% refund. 100% charge on cancellations with less
                                                            than 48 hours or no show. In case of bad weather 100% refund
                                                            is allowed only when harbor is closed by the authorities. No
                                                            changes cancellations or refunds on any promotion. Coupon is
                                                            needed it for any changes.</span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><br></span>
                                                    </p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g"><strong
                                                                class="x-el x-el-span c1-1v c1-1w c1-b c1-a3 c1-2b c1-4s c1-a4">Terms
                                                                and Conditions</strong></span></p>
                                                    <p style="margin:0"><span
                                                            class="x-el x-el-span c1-8t c1-8u c1-b c1-c c1-d c1-e c1-f c1-g">Turiscabos
                                                            is located inside the Los Cabos International Airport,
                                                            Mexico,
                                                            knows that you care how information about you is used and
                                                            shared,
                                                            and we appreciate your trust that we will do so carefully
                                                            and sensibly. This notice describes our privacy policy. The
                                                            information we learn from visitors to our Sites helps us
                                                            personalize and continually improve your user experience.
                                                            The remainder of this policy describes our information and
                                                            handling practices in detail.&nbsp;
                                                        </span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-ux="GridCell"
                                            class="x-el x-el-div c1-1 c1-2 c1-17 c1-2i c1-1l c1-8x c1-z c1-1n c1-2k c1-1p c1-1q c1-a8 c1-2l c1-b c1-c c1-8z c1-90 c1-1r c1-1s c1-1t c1-1u c1-d c1-a9 c1-aa c1-ab c1-ac c1-e c1-f c1-g">
                                            <div data-ux="Block"
                                                class="x-el x-el-div c1-1 c1-2 c1-2l c1-b c1-c c1-d c1-e c1-f c1-g"><a
                                                    data-ux="Element" href="/services" target="" rel=""
                                                    data-page="1def3029-36ae-4e5f-be4b-f3aa97ad37cb"
                                                    class="x-el x-el-a c1-1 c1-2 c1-1x c1-20 c1-b c1-c c1-d c1-e c1-f c1-g"><img
                                                        data-lazyimg="true"
                                                        data-srclazy="//img1.wsimg.com/isteam/ip/7218ace1-51cf-45f5-b9df-9ac24a7e869e/TURISCABOS_SCALADE.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:400,cg:true"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                        srcSet="//img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:400,h:400,cg:true,m,i:true/qt=q:1 451w, //img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:400,h:400,cg:true,m,i:true/qt=q:1 768w, //img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:400,h:400,cg:true,m,i:true/qt=q:1 1024w, //img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:400,h:400,cg:true,m,i:true/qt=q:1 1280w, //img1.wsimg.com/isteam/ip/static/transparent_placeholder.png/:/rs=w:400,h:400,cg:true,m,i:true/qt=q:1 1536w"
                                                        sizes="(min-width: 451px) and (max-width: 767px) 767px, (min-width: 768px) and (max-width: 1023px) 1023px, (min-width: 1024px) and (max-width: 1279px) 1279px, (min-width: 1280px) and (max-width: 1535px) 1535px, (min-width: 1536px) 1536px"
                                                        data-srcsetlazy="//img1.wsimg.com/isteam/ip/7218ace1-51cf-45f5-b9df-9ac24a7e869e/TURISCABOS_SCALADE.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:400,cg:true, //img1.wsimg.com/isteam/ip/7218ace1-51cf-45f5-b9df-9ac24a7e869e/TURISCABOS_SCALADE.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:800,cg:true 2x, //img1.wsimg.com/isteam/ip/7218ace1-51cf-45f5-b9df-9ac24a7e869e/TURISCABOS_SCALADE.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:1200,cg:true 3x"
                                                        alt="TURISCABOS. Private escalde for up to 6 people"
                                                        data-ux="Image" data-aid="CONTENT_IMAGE1_RENDERED"
                                                        class="x-el x-el-img c1-1 c1-2 c1-4 c1-z c1-v c1-w c1-1a c1-ad c1-2y c1-2c c1-b c1-c c1-ae c1-d c1-7p c1-e c1-f c1-g" /></a>
                                            </div>
                                            <figcaption data-ux="FigCaption" data-aid="CONTENT_MEDIA_CAPTION_RENDERED"
                                                data-typography="DetailsAlpha"
                                                class="x-el c1-1 c1-2 c1-1y c1-1z c1-5d c1-1a c1-af c1-ag c1-ah c1-ai c1-5y c1-5x c1-b c1-aj c1-80 c1-3u c1-86 c1-87 c1-88 c1-89 x-rt">
                                                <p style="margin:0"><span>TURISCABOS. Private escalde for up to 6
                                                        people</span></p>
                                            </figcaption>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div id="9e02d961-7d04-441d-a2fa-e7fb4cd25222" class="widget widget-footer widget-footer-footer-1">
                    <div data-ux="Widget" role="contentinfo" id="9e02d961-7d04-441d-a2fa-e7fb4cd25222"
                        class="x-el x-el-div x-el c1-1 c1-2 c1-ak c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                        <div>
                            <section data-ux="Section"
                                class="x-el x-el-section c1-1 c1-2 c1-ak c1-h c1-i c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g">
                                <div data-ux="Container"
                                    class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g">
                                    <div data-ux="Layout"
                                        class="x-el x-el-div c1-1 c1-2 c1-2l c1-b c1-c c1-d c1-e c1-f c1-g">
                                        <div data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED"
                                            data-typography="DetailsAlpha"
                                            class="x-el c1-1 c1-2 c1-1y c1-1z c1-5d c1-1a c1-af c1-b c1-al c1-80 c1-3u c1-86 c1-87 c1-88 c1-89 x-rt">
                                            <p style="margin:0"><span
                                                    class="x-el x-el-span c1-8t c1-8u c1-b c1-80 c1-86 c1-87 c1-88 c1-89">Copyright
                                                    © 2020 Turiscabos -All rights reserved.</span></p>
                                        </div>
                                        <hr aria-hidden="true" role="separator" data-ux="HR"
                                            class="x-el x-el-hr c1-1 c1-2 c1-am c1-4q c1-60 c1-1a c1-af c1-an c1-v c1-w c1-b c1-c c1-d c1-e c1-f c1-g" />
                                        <p data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED"
                                            data-typography="DetailsAlpha"
                                            class="x-el x-el-p c1-1 c1-2 c1-1y c1-1z c1-5d c1-1a c1-1c c1-b c1-al c1-80 c1-3u c1-86 c1-87 c1-88 c1-89">
                                            <span></span></p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div id="a6771f34-ca9f-40fc-9612-5d6d026c7b04"
                    class="widget widget-messaging widget-messaging-messaging-1">
                    <div data-ux="Element" id="bs-9" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                        <div data-ux="Block"
                            class="x-el x-el-div c1-1 c1-2 c1-6j c1-ao c1-ap c1-aq c1-ar c1-as c1-b c1-c c1-d c1-at c1-e c1-f c1-g">
                            <div data-ux="Block" data-aid="MESSAGING_FAB" data-edit-interactive="true"
                                data-traffic2="pandc.vnext.editor_preview.messaging_fab_open.click"
                                data-tccl="ux2.messaging.fab.open,click"
                                class="x-el x-el-div c1-1 c1-2 c1-16 c1-1e c1-8w c1-20 c1-4 c1-6l c1-au c1-ak c1-av c1-aw c1-b c1-c c1-d c1-e c1-f c1-g">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="44" height="44" data-ux="Icon"
                                    class="x-el x-el-svg c1-1 c1-2 c1-al c1-2c c1-2y c1-b c1-c c1-d c1-e c1-f c1-g">
                                    <g fill="currentColor">
                                        <rect x="4" y="6" width="16" height="10.222" rx="1.129"></rect>
                                        <path
                                            d="M8.977 18.578l.2-2.722a.564.564 0 01.564-.523h3.61c.548 0 .774.705.327 1.024l-3.81 2.721a.564.564 0 01-.89-.5z">
                                        </path>
                                    </g>
                                </svg></div>
                        </div>
                    </div>
                </div>
                <div id="b402357b-92ee-4c1b-b8d8-67700af99c82" class="widget widget-popup widget-popup-popup-1"></div>
                <div id="e3c8db1b-ed32-4853-85c0-c17ceba660f5"
                    class="widget widget-cookie-banner widget-cookie-banner-cookie-1">
                    <div data-ux="Group" data-aid="FOOTER_COOKIE_BANNER_RENDERED"
                        id="e3c8db1b-ed32-4853-85c0-c17ceba660f5-banner"
                        class="x-el x-el-div c1-1 c1-2 c1-6j c1-ax c1-ay c1-4 c1-7l c1-41 c1-ak c1-32 c1-55 c1-az c1-b0 c1-b1 c1-b2 c1-b3 c1-y c1-b4 c1-x c1-1a c1-44 c1-1c c1-27 c1-2x c1-b c1-c c1-b5 c1-b6 c1-b7 c1-b8 c1-b9 c1-ba c1-bb c1-d c1-e c1-f c1-g">
                        <h4 role="heading" aria-level="4" data-ux="Heading" data-aid="FOOTER_COOKIE_TITLE_RENDERED"
                            data-typography="HeadingDelta"
                            class="x-el x-el-h4 c1-1 c1-2 c1-1y c1-1z c1-9a c1-27 c1-44 c1-1a c1-1c c1-r c1-b c1-al c1-7d c1-3u c1-7g c1-7i c1-7j c1-7k">
                            Cookies Policy</h4>
                        <div data-ux="Text" data-aid="FOOTER_COOKIE_MESSAGE_RENDERED" data-typography="BodyAlpha"
                            class="x-el c1-1 c1-2 c1-1y c1-1z c1-5d c1-1a c1-1c c1-bc c1-55 c1-b c1-al c1-c c1-3u c1-bd c1-d c1-e c1-f c1-g x-rt">
                            <p style="margin:0"><span>This website using cookies. A continuing using this site,
                                    you accept the use of cookies.</span></p>
                        </div>
                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-16 c1-7c c1-b c1-c c1-d c1-e c1-f c1-g">
                            <a data-ux-btn="primary" data-ux="ButtonPrimary" href=""
                                data-aid="FOOTER_COOKIE_CLOSE_RENDERED" id="e3c8db1b-ed32-4853-85c0-c17ceba660f5-accept"
                                data-typography="ButtonAlpha"
                                class="x-el x-el-a c1-be c1-3t c1-16 c1-6t c1-8w c1-20 c1-bf c1-bg c1-bh c1-bi c1-2i c1-bj c1-1e c1-2l c1-1x c1-1z c1-1y c1-m c1-z c1-4 c1-4z c1-50 c1-ah c1-ai c1-bk c1-32 c1-bl c1-3 c1-b c1-4s c1-6v c1-3o c1-bm c1-bn c1-bo c1-3p c1-3q c1-3r c1-3s"
                                data-tccl="ux2.COOKIE_BANNER.cookie1.Group.Default.Button.Primary.57447.click,click">Accept
                                and close</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>@endsection

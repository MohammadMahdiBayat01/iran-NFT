.container {
  width: 100%;
}

@media (min-width: 640px) {
  .container {
    max-width: 640px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 768px;
  }
}

@media (min-width: 1024px) {
  .container {
    max-width: 1024px;
  }
}

@media (min-width: 1280px) {
  .container {
    max-width: 1280px;
  }
}

@media (min-width: 1536px) {
  .container {
    max-width: 1536px;
  }
}

.container {
  max-width: 90%;
}

/*
! tailwindcss v3.4.10 | MIT License | https://tailwindcss.com
*/

/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: #E5E7EB;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/

html,
:host {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */
  font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 4 */
  font-feature-settings: normal;
  /* 5 */
  font-variation-settings: normal;
  /* 6 */
  -webkit-tap-highlight-color: transparent;
  /* 7 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  /* 1 */
  font-feature-settings: normal;
  /* 2 */
  font-variation-settings: normal;
  /* 3 */
  font-size: 1em;
  /* 4 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-feature-settings: inherit;
  /* 1 */
  font-variation-settings: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  font-weight: inherit;
  /* 1 */
  line-height: inherit;
  /* 1 */
  letter-spacing: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
input:where([type='button']),
input:where([type='reset']),
input:where([type='submit']) {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Reset default styling for dialogs.
*/

dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9CA3AF;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9CA3AF;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */

[hidden] {
  display: none;
}

[data-popper-arrow],[data-popper-arrow]:before {
  position: absolute;
  width: 8px;
  height: 8px;
  background: inherit;
}

[data-popper-arrow] {
  visibility: hidden;
}

[data-popper-arrow]:before {
  content: "";
  visibility: visible;
  transform: rotate(45deg);
}

[data-popper-arrow]:after {
  content: "";
  visibility: visible;
  transform: rotate(45deg);
  position: absolute;
  width: 9px;
  height: 9px;
  background: inherit;
}

[role="tooltip"] > [data-popper-arrow]:before {
  border-style: solid;
  border-color: #e5e7eb;
}

[role="tooltip"] > [data-popper-arrow]:after {
  border-style: solid;
  border-color: #e5e7eb;
}

[data-popover][role="tooltip"][data-popper-placement^='top'] > [data-popper-arrow]:before {
  border-bottom-width: 1px;
  border-right-width: 1px;
}

[data-popover][role="tooltip"][data-popper-placement^='top'] > [data-popper-arrow]:after {
  border-bottom-width: 1px;
  border-right-width: 1px;
}

[data-popover][role="tooltip"][data-popper-placement^='right'] > [data-popper-arrow]:before {
  border-bottom-width: 1px;
  border-left-width: 1px;
}

[data-popover][role="tooltip"][data-popper-placement^='right'] > [data-popper-arrow]:after {
  border-bottom-width: 1px;
  border-left-width: 1px;
}

[data-popover][role="tooltip"][data-popper-placement^='bottom'] > [data-popper-arrow]:before {
  border-top-width: 1px;
  border-left-width: 1px;
}

[data-popover][role="tooltip"][data-popper-placement^='bottom'] > [data-popper-arrow]:after {
  border-top-width: 1px;
  border-left-width: 1px;
}

[data-popover][role="tooltip"][data-popper-placement^='left'] > [data-popper-arrow]:before {
  border-top-width: 1px;
  border-right-width: 1px;
}

[data-popover][role="tooltip"][data-popper-placement^='left'] > [data-popper-arrow]:after {
  border-top-width: 1px;
  border-right-width: 1px;
}

[data-popover][role="tooltip"][data-popper-placement^='top'] > [data-popper-arrow] {
  bottom: -5px;
}

[data-popover][role="tooltip"][data-popper-placement^='bottom'] > [data-popper-arrow] {
  top: -5px;
}

[data-popover][role="tooltip"][data-popper-placement^='left'] > [data-popper-arrow] {
  right: -5px;
}

[data-popover][role="tooltip"][data-popper-placement^='right'] > [data-popper-arrow] {
  left: -5px;
}

[type='text'],[type='email'],[type='url'],[type='password'],[type='number'],[type='date'],[type='datetime-local'],[type='month'],[type='search'],[type='tel'],[type='time'],[type='week'],[multiple],textarea,select {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: #fff;
  border-color: #6B7280;
  border-width: 1px;
  border-radius: 0px;
  padding-top: 0.5rem;
  padding-right: 0.75rem;
  padding-bottom: 0.5rem;
  padding-left: 0.75rem;
  font-size: 1rem;
  line-height: 1.5rem;
  --tw-shadow: 0 0 #0000;
}

[type='text']:focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: #1C64F2;
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
  border-color: #1C64F2;
}

input::-moz-placeholder, textarea::-moz-placeholder {
  color: #6B7280;
  opacity: 1;
}

input::placeholder,textarea::placeholder {
  color: #6B7280;
  opacity: 1;
}

::-webkit-datetime-edit-fields-wrapper {
  padding: 0;
}

input[type="time"]::-webkit-calendar-picker-indicator {
  background: none;
}

select:not([size]) {
  background-image: url("data:image/svg+xml,%3csvg aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 10 6'%3e %3cpath stroke='%236B7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m1 1 4 4 4-4'/%3e %3c/svg%3e");
  background-position: right 0.75rem center;
  background-repeat: no-repeat;
  background-size: 0.75em 0.75em;
  padding-right: 2.5rem;
  -webkit-print-color-adjust: exact;
          print-color-adjust: exact;
}

:is([dir=rtl]) select:not([size]) {
  background-position: left 0.75rem center;
  padding-right: 0.75rem;
  padding-left: 0;
}

[multiple] {
  background-image: initial;
  background-position: initial;
  background-repeat: unset;
  background-size: initial;
  padding-right: 0.75rem;
  -webkit-print-color-adjust: unset;
          print-color-adjust: unset;
}

[type='checkbox'],[type='radio'] {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  padding: 0;
  -webkit-print-color-adjust: exact;
          print-color-adjust: exact;
  display: inline-block;
  vertical-align: middle;
  background-origin: border-box;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  flex-shrink: 0;
  height: 1rem;
  width: 1rem;
  color: #1C64F2;
  background-color: #fff;
  border-color: #6B7280;
  border-width: 1px;
  --tw-shadow: 0 0 #0000;
}

[type='checkbox'] {
  border-radius: 0px;
}

[type='radio'] {
  border-radius: 100%;
}

[type='checkbox']:focus,[type='radio']:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
  --tw-ring-offset-width: 2px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: #1C64F2;
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
}

[type='checkbox']:checked,[type='radio']:checked,.dark [type='checkbox']:checked,.dark [type='radio']:checked {
  border-color: transparent;
  background-color: currentColor;
  background-size: 0.55em 0.55em;
  background-position: center;
  background-repeat: no-repeat;
}

[type='checkbox']:checked {
  background-image: url("data:image/svg+xml,%3csvg aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 12'%3e %3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M1 5.917 5.724 10.5 15 1.5'/%3e %3c/svg%3e");
  background-repeat: no-repeat;
  background-size: 0.55em 0.55em;
  -webkit-print-color-adjust: exact;
          print-color-adjust: exact;
}

[type='radio']:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
  background-size: 1em 1em;
}

[type='checkbox']:indeterminate {
  background-image: url("data:image/svg+xml,%3csvg aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 12'%3e %3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M0.5 6h14'/%3e %3c/svg%3e");
  background-color: currentColor;
  border-color: transparent;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 0.55em 0.55em;
  -webkit-print-color-adjust: exact;
          print-color-adjust: exact;
}

[type='checkbox']:indeterminate:hover,[type='checkbox']:indeterminate:focus {
  border-color: transparent;
  background-color: currentColor;
}

[type='file'] {
  background: unset;
  border-color: inherit;
  border-width: 0;
  border-radius: 0;
  padding: 0;
  font-size: unset;
  line-height: inherit;
}

[type='file']:focus {
  outline: 1px auto inherit;
}

input[type=file]::file-selector-button {
  color: white;
  background: #1F2937;
  border: 0;
  font-weight: 500;
  font-size: 0.875rem;
  cursor: pointer;
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
  padding-left: 2rem;
  padding-right: 1rem;
  margin-inline-start: -1rem;
  margin-inline-end: 1rem;
}

input[type=file]::file-selector-button:hover {
  background: #374151;
}

:is([dir=rtl]) input[type=file]::file-selector-button {
  padding-right: 2rem;
  padding-left: 1rem;
}

input[type="range"]::-webkit-slider-thumb {
  height: 1.25rem;
  width: 1.25rem;
  background: #1C64F2;
  border-radius: 9999px;
  border: 0;
  appearance: none;
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
}

input[type="range"]:disabled::-webkit-slider-thumb {
  background: #9CA3AF;
}

input[type="range"]:focus::-webkit-slider-thumb {
  outline: 2px solid transparent;
  outline-offset: 2px;
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(4px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
  --tw-ring-opacity: 1px;
  --tw-ring-color: rgb(164 202 254 / var(--tw-ring-opacity));
}

input[type="range"]::-moz-range-thumb {
  height: 1.25rem;
  width: 1.25rem;
  background: #1C64F2;
  border-radius: 9999px;
  border: 0;
  appearance: none;
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
}

input[type="range"]:disabled::-moz-range-thumb {
  background: #9CA3AF;
}

input[type="range"]::-moz-range-progress {
  background: #3F83F8;
}

input[type="range"]::-ms-fill-lower {
  background: #3F83F8;
}

*, ::before, ::after {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(63 131 248 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}

::backdrop {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(63 131 248 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border-width: 0;
}

.pointer-events-none {
  pointer-events: none;
}

.fixed {
  position: fixed;
}

.absolute {
  position: absolute;
}

.relative {
  position: relative;
}

.inset-y-0 {
  top: 0px;
  bottom: 0px;
}

.-bottom-\[10px\] {
  bottom: -10px;
}

.-right-60 {
  right: -15rem;
}

.-right-\[19px\] {
  right: -19px;
}

.-top-12 {
  top: -3rem;
}

.-top-32 {
  top: -8rem;
}

.-top-36 {
  top: -9rem;
}

.bottom-10 {
  bottom: 2.5rem;
}

.end-0 {
  inset-inline-end: 0px;
}

.end-2\.5 {
  inset-inline-end: 0.625rem;
}

.left-0 {
  left: 0px;
}

.right-0 {
  right: 0px;
}

.right-10 {
  right: 2.5rem;
}

.start-0 {
  inset-inline-start: 0px;
}

.top-0 {
  top: 0px;
}

.top-2\.5 {
  top: 0.625rem;
}

.top-4 {
  top: 1rem;
}

.z-0 {
  z-index: 0;
}

.z-10 {
  z-index: 10;
}

.z-20 {
  z-index: 20;
}

.z-40 {
  z-index: 40;
}

.mx-6 {
  margin-left: 1.5rem;
  margin-right: 1.5rem;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.my-3 {
  margin-top: 0.75rem;
  margin-bottom: 0.75rem;
}

.my-6 {
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}

.mb-12 {
  margin-bottom: 3rem;
}

.mb-14 {
  margin-bottom: 3.5rem;
}

.ml-3 {
  margin-left: 0.75rem;
}

.mr-2 {
  margin-right: 0.5rem;
}

.ms-3 {
  margin-inline-start: 0.75rem;
}

.mt-10 {
  margin-top: 2.5rem;
}

.mt-16 {
  margin-top: 4rem;
}

.mt-2 {
  margin-top: 0.5rem;
}

.mt-20 {
  margin-top: 5rem;
}

.mt-32 {
  margin-top: 8rem;
}

.mt-4 {
  margin-top: 1rem;
}

.mt-40 {
  margin-top: 10rem;
}

.mt-6 {
  margin-top: 1.5rem;
}

.mt-60 {
  margin-top: 15rem;
}

.mt-8 {
  margin-top: 2rem;
}

.block {
  display: block;
}

.flex {
  display: flex;
}

.inline-flex {
  display: inline-flex;
}

.grid {
  display: grid;
}

.hidden {
  display: none;
}

.h-10 {
  height: 2.5rem;
}

.h-12 {
  height: 3rem;
}

.h-14 {
  height: 3.5rem;
}

.h-16 {
  height: 4rem;
}

.h-20 {
  height: 5rem;
}

.h-24 {
  height: 6rem;
}

.h-3 {
  height: 0.75rem;
}

.h-36 {
  height: 9rem;
}

.h-5 {
  height: 1.25rem;
}

.h-6 {
  height: 1.5rem;
}

.h-8 {
  height: 2rem;
}

.h-9 {
  height: 2.25rem;
}

.h-\[200px\] {
  height: 200px;
}

.h-\[426px\] {
  height: 426px;
}

.h-\[447px\] {
  height: 447px;
}

.h-\[60rem\] {
  height: 60rem;
}

.h-full {
  height: 100%;
}

.h-screen {
  height: 100vh;
}

.w-1\/2 {
  width: 50%;
}

.w-1\/3 {
  width: 33.333333%;
}

.w-1\/4 {
  width: 25%;
}

.w-10 {
  width: 2.5rem;
}

.w-12 {
  width: 3rem;
}

.w-14 {
  width: 3.5rem;
}

.w-16 {
  width: 4rem;
}

.w-2\/3 {
  width: 66.666667%;
}

.w-2\/4 {
  width: 50%;
}

.w-20 {
  width: 5rem;
}

.w-24 {
  width: 6rem;
}

.w-3 {
  width: 0.75rem;
}

.w-3\/4 {
  width: 75%;
}

.w-44 {
  width: 11rem;
}

.w-48 {
  width: 12rem;
}

.w-5 {
  width: 1.25rem;
}

.w-5\/12 {
  width: 41.666667%;
}

.w-56 {
  width: 14rem;
}

.w-64 {
  width: 16rem;
}

.w-8 {
  width: 2rem;
}

.w-80 {
  width: 20rem;
}

.w-96 {
  width: 24rem;
}

.w-\[311px\] {
  width: 311px;
}

.w-\[321px\] {
  width: 321px;
}

.w-full {
  width: 100%;
}

.max-w-80 {
  max-width: 20rem;
}

.flex-1 {
  flex: 1 1 0%;
}

.flex-shrink-0 {
  flex-shrink: 0;
}

.-translate-x-full {
  --tw-translate-x: -100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-rotate-45 {
  --tw-rotate: -45deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.rotate-12 {
  --tw-rotate: 12deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.scale-110 {
  --tw-scale-x: 1.1;
  --tw-scale-y: 1.1;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.cursor-pointer {
  cursor: pointer;
}

.grid-cols-1 {
  grid-template-columns: repeat(1, minmax(0, 1fr));
}

.grid-cols-2 {
  grid-template-columns: repeat(2, minmax(0, 1fr));
}

.grid-cols-3 {
  grid-template-columns: repeat(3, minmax(0, 1fr));
}

.grid-cols-4 {
  grid-template-columns: repeat(4, minmax(0, 1fr));
}

.grid-cols-7 {
  grid-template-columns: repeat(7, minmax(0, 1fr));
}

.flex-row {
  flex-direction: row;
}

.flex-col {
  flex-direction: column;
}

.flex-wrap {
  flex-wrap: wrap;
}

.items-center {
  align-items: center;
}

.justify-center {
  justify-content: center;
}

.justify-between {
  justify-content: space-between;
}

.gap-3 {
  gap: 0.75rem;
}

.gap-x-1 {
  -moz-column-gap: 0.25rem;
       column-gap: 0.25rem;
}

.gap-x-3 {
  -moz-column-gap: 0.75rem;
       column-gap: 0.75rem;
}

.gap-x-4 {
  -moz-column-gap: 1rem;
       column-gap: 1rem;
}

.gap-x-5 {
  -moz-column-gap: 1.25rem;
       column-gap: 1.25rem;
}

.gap-y-20 {
  row-gap: 5rem;
}

.gap-y-5 {
  row-gap: 1.25rem;
}

.gap-y-6 {
  row-gap: 1.5rem;
}

.space-x-3 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(0.75rem * var(--tw-space-x-reverse));
  margin-left: calc(0.75rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-y-2 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
}

.self-center {
  align-self: center;
}

.overflow-y-auto {
  overflow-y: auto;
}

.overflow-x-hidden {
  overflow-x: hidden;
}

.whitespace-nowrap {
  white-space: nowrap;
}

.rounded-2xl {
  border-radius: 1rem;
}

.rounded-3xl {
  border-radius: 1.5rem;
}

.rounded-\[70px\] {
  border-radius: 70px;
}

.rounded-full {
  border-radius: 9999px;
}

.rounded-lg {
  border-radius: 0.5rem;
}

.rounded-xl {
  border-radius: 0.75rem;
}

.rounded-b-3xl {
  border-bottom-right-radius: 1.5rem;
  border-bottom-left-radius: 1.5rem;
}

.rounded-e-lg {
  border-start-end-radius: 0.5rem;
  border-end-end-radius: 0.5rem;
}

.rounded-l-3xl {
  border-top-left-radius: 1.5rem;
  border-bottom-left-radius: 1.5rem;
}

.rounded-l-lg {
  border-top-left-radius: 0.5rem;
  border-bottom-left-radius: 0.5rem;
}

.rounded-r-lg {
  border-top-right-radius: 0.5rem;
  border-bottom-right-radius: 0.5rem;
}

.rounded-s-lg {
  border-start-start-radius: 0.5rem;
  border-end-start-radius: 0.5rem;
}

.border {
  border-width: 1px;
}

.border-t {
  border-top-width: 1px;
}

.border-blue-800 {
  --tw-border-opacity: 1;
  border-color: rgb(30 66 159 / var(--tw-border-opacity));
}

.border-green-600 {
  --tw-border-opacity: 1;
  border-color: rgb(5 122 85 / var(--tw-border-opacity));
}

.border-orange-light {
  --tw-border-opacity: 1;
  border-color: rgb(255 60 0 / var(--tw-border-opacity));
}

.border-red-600 {
  --tw-border-opacity: 1;
  border-color: rgb(224 36 36 / var(--tw-border-opacity));
}

.border-red-700 {
  --tw-border-opacity: 1;
  border-color: rgb(200 30 30 / var(--tw-border-opacity));
}

.border-white\/20 {
  border-color: rgb(255 255 255 / 0.2);
}

.border-white\/30 {
  border-color: rgb(255 255 255 / 0.3);
}

.border-white\/50 {
  border-color: rgb(255 255 255 / 0.5);
}

.border-t-\[\#00D1FF\] {
  --tw-border-opacity: 1;
  border-top-color: rgb(0 209 255 / var(--tw-border-opacity));
}

.border-t-\[\#760AFF\] {
  --tw-border-opacity: 1;
  border-top-color: rgb(118 10 255 / var(--tw-border-opacity));
}

.border-t-\[\#FC280C\] {
  --tw-border-opacity: 1;
  border-top-color: rgb(252 40 12 / var(--tw-border-opacity));
}

.border-t-\[\#FE007A\] {
  --tw-border-opacity: 1;
  border-top-color: rgb(254 0 122 / var(--tw-border-opacity));
}

.border-t-\[\#FFBF1C\] {
  --tw-border-opacity: 1;
  border-top-color: rgb(255 191 28 / var(--tw-border-opacity));
}

.\!bg-gray-50 {
  --tw-bg-opacity: 1 !important;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity)) !important;
}

.bg-black {
  --tw-bg-opacity: 1;
  background-color: rgb(0 0 0 / var(--tw-bg-opacity));
}

.bg-blue-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(225 239 254 / var(--tw-bg-opacity));
}

.bg-blue-700 {
  --tw-bg-opacity: 1;
  background-color: rgb(26 86 219 / var(--tw-bg-opacity));
}

.bg-darkBlue {
  --tw-bg-opacity: 1;
  background-color: rgb(7 16 29 / var(--tw-bg-opacity));
}

.bg-gray-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.bg-gray-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.bg-orange-light {
  --tw-bg-opacity: 1;
  background-color: rgb(255 60 0 / var(--tw-bg-opacity));
}

.bg-transparent {
  background-color: transparent;
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-white\/10 {
  background-color: rgb(255 255 255 / 0.1);
}

.bg-white\/5 {
  background-color: rgb(255 255 255 / 0.05);
}

.bg-none {
  background-image: none;
}

.p-2 {
  padding: 0.5rem;
}

.p-2\.5 {
  padding: 0.625rem;
}

.p-3 {
  padding: 0.75rem;
}

.p-4 {
  padding: 1rem;
}

.p-8 {
  padding: 2rem;
}

.px-1 {
  padding-left: 0.25rem;
  padding-right: 0.25rem;
}

.px-2 {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}

.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}

.px-5 {
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.px-8 {
  padding-left: 2rem;
  padding-right: 2rem;
}

.py-1 {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.py-10 {
  padding-top: 2.5rem;
  padding-bottom: 2.5rem;
}

.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.py-2\.5 {
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
}

.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.py-4 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}

.py-5 {
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
}

.py-8 {
  padding-top: 2rem;
  padding-bottom: 2rem;
}

.pb-2 {
  padding-bottom: 0.5rem;
}

.pl-0 {
  padding-left: 0px;
}

.pl-11 {
  padding-left: 2.75rem;
}

.pr-4 {
  padding-right: 1rem;
}

.ps-12 {
  padding-inline-start: 3rem;
}

.ps-3\.5 {
  padding-inline-start: 0.875rem;
}

.pt-12 {
  padding-top: 3rem;
}

.text-left {
  text-align: left;
}

.text-center {
  text-align: center;
}

.text-right {
  text-align: right;
}

.text-2xl {
  font-size: 1.5rem;
  line-height: 2rem;
}

.text-3xl {
  font-size: 1.875rem;
  line-height: 2.25rem;
}

.text-4xl {
  font-size: 2.25rem;
  line-height: 2.5rem;
}

.text-base {
  font-size: 1rem;
  line-height: 1.5rem;
}

.text-lg {
  font-size: 1.125rem;
  line-height: 1.75rem;
}

.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.text-xl {
  font-size: 1.25rem;
  line-height: 1.75rem;
}

.text-xs {
  font-size: 0.75rem;
  line-height: 1rem;
}

.font-bold {
  font-weight: 700;
}

.font-medium {
  font-weight: 500;
}

.font-semibold {
  font-weight: 600;
}

.uppercase {
  text-transform: uppercase;
}

.leading-6 {
  line-height: 1.5rem;
}

.leading-9 {
  line-height: 2.25rem;
}

.text-blue-800 {
  --tw-text-opacity: 1;
  color: rgb(30 66 159 / var(--tw-text-opacity));
}

.text-darkGray {
  --tw-text-opacity: 1;
  color: rgb(148 148 148 / var(--tw-text-opacity));
}

.text-gray-400 {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

.text-gray-500 {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.text-gray-800 {
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}

.text-gray-900 {
  --tw-text-opacity: 1;
  color: rgb(17 24 39 / var(--tw-text-opacity));
}

.text-orange-light {
  --tw-text-opacity: 1;
  color: rgb(255 60 0 / var(--tw-text-opacity));
}

.text-red-500 {
  --tw-text-opacity: 1;
  color: rgb(240 82 82 / var(--tw-text-opacity));
}

.text-red-700 {
  --tw-text-opacity: 1;
  color: rgb(200 30 30 / var(--tw-text-opacity));
}

.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.opacity-50 {
  opacity: 0.5;
}

.shadow-lg {
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.blur-3xl {
  --tw-blur: blur(64px);
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.backdrop-blur-sm {
  --tw-backdrop-blur: blur(4px);
  -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
  backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}

.transition {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-transform {
  transition-property: transform;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.duration-300 {
  transition-duration: 300ms;
}

.duration-75 {
  transition-duration: 75ms;
}

@font-face {
  font-family: iransans;

  src: url('fontweb/eot/IRANSansWeb.eot') format('eot'), url('fontweb/woff2/IRANSansWeb.woff2') format('woff2'), url('fontweb/woff/IRANSansWeb.woff') format('woff');
}

@font-face {
  font-family: iransansbold;

  src: url('fontweb/eot/IRANSansWeb_Bold.eot') format('eot'), url('fontweb/woff2/IRANSansWeb_Bold.woff2') format('woff2'), url('fontweb/woff/IRANSansWeb_Bold.woff') format('woff');
}

@font-face {
  font-family: iransanslight;

  src: url('fontweb/eot/IRANSansWeb_Light.eot') format('eot'), url('fontweb/woff2/IRANSansWeb_Light.woff2') format('woff2'), url('fontweb/woff/IRANSansWeb_Light.woff') format('woff');
}

.bold {
  font-family: iransansbold !important;
}

.light {
  font-family: iransanslight !important;
}

* {
  text-decoration: none;
  font-family: iransans;
  box-sizing: border-box;
}

.hover\:bg-blue-800:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(30 66 159 / var(--tw-bg-opacity));
}

.hover\:bg-gray-100:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.hover\:bg-gray-200:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.hover\:text-gray-900:hover {
  --tw-text-opacity: 1;
  color: rgb(17 24 39 / var(--tw-text-opacity));
}

.focus\:outline-none:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.focus\:ring-2:focus {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus\:ring-4:focus {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(4px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus\:ring-blue-300:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(164 202 254 / var(--tw-ring-opacity));
}

.focus\:ring-gray-200:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(229 231 235 / var(--tw-ring-opacity));
}

.group:hover .group-hover\:text-gray-900 {
  --tw-text-opacity: 1;
  color: rgb(17 24 39 / var(--tw-text-opacity));
}

@media (min-width: 768px) {
  .md\:order-1 {
    order: 1;
  }

  .md\:order-2 {
    order: 2;
  }

  .md\:flex {
    display: flex;
  }

  .md\:hidden {
    display: none;
  }

  .md\:w-auto {
    width: auto;
  }

  .md\:space-x-0 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(0px * var(--tw-space-x-reverse));
    margin-left: calc(0px * calc(1 - var(--tw-space-x-reverse)));
  }

  .md\:space-x-8 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(2rem * var(--tw-space-x-reverse));
    margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
  }

  .md\:p-0 {
    padding: 0px;
  }
}

@media (min-width: 1024px) {
  .lg\:-bottom-1\/4 {
    bottom: -25%;
  }

  .lg\:-top-64 {
    top: -16rem;
  }

  .lg\:order-1 {
    order: 1;
  }

  .lg\:order-3 {
    order: 3;
  }

  .lg\:my-10 {
    margin-top: 2.5rem;
    margin-bottom: 2.5rem;
  }

  .lg\:my-16 {
    margin-top: 4rem;
    margin-bottom: 4rem;
  }

  .lg\:mr-16 {
    margin-right: 4rem;
  }

  .lg\:mt-0 {
    margin-top: 0px;
  }

  .lg\:mt-12 {
    margin-top: 3rem;
  }

  .lg\:mt-14 {
    margin-top: 3.5rem;
  }

  .lg\:mt-36 {
    margin-top: 9rem;
  }

  .lg\:mt-4 {
    margin-top: 1rem;
  }

  .lg\:mt-6 {
    margin-top: 1.5rem;
  }

  .lg\:mt-60 {
    margin-top: 15rem;
  }

  .lg\:mt-8 {
    margin-top: 2rem;
  }

  .lg\:mt-80 {
    margin-top: 20rem;
  }

  .lg\:block {
    display: block;
  }

  .lg\:inline {
    display: inline;
  }

  .lg\:flex {
    display: flex;
  }

  .lg\:hidden {
    display: none;
  }

  .lg\:h-14 {
    height: 3.5rem;
  }

  .lg\:h-20 {
    height: 5rem;
  }

  .lg\:h-24 {
    height: 6rem;
  }

  .lg\:h-56 {
    height: 14rem;
  }

  .lg\:h-80 {
    height: 20rem;
  }

  .lg\:h-96 {
    height: 24rem;
  }

  .lg\:h-\[526px\] {
    height: 526px;
  }

  .lg\:h-\[547px\] {
    height: 547px;
  }

  .lg\:h-\[900px\] {
    height: 900px;
  }

  .lg\:h-auto {
    height: auto;
  }

  .lg\:w-1\/3 {
    width: 33.333333%;
  }

  .lg\:w-14 {
    width: 3.5rem;
  }

  .lg\:w-2\/3 {
    width: 66.666667%;
  }

  .lg\:w-24 {
    width: 6rem;
  }

  .lg\:w-3\/12 {
    width: 25%;
  }

  .lg\:w-36 {
    width: 9rem;
  }

  .lg\:w-4\/12 {
    width: 33.333333%;
  }

  .lg\:w-44 {
    width: 11rem;
  }

  .lg\:w-5\/12 {
    width: 41.666667%;
  }

  .lg\:w-56 {
    width: 14rem;
  }

  .lg\:w-\[411px\] {
    width: 411px;
  }

  .lg\:w-\[421px\] {
    width: 421px;
  }

  .lg\:w-auto {
    width: auto;
  }

  .lg\:max-w-\[36rem\] {
    max-width: 36rem;
  }

  .lg\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .lg\:grid-cols-6 {
    grid-template-columns: repeat(6, minmax(0, 1fr));
  }

  .lg\:flex-row {
    flex-direction: row;
  }

  .lg\:flex-wrap-reverse {
    flex-wrap: wrap-reverse;
  }

  .lg\:justify-start {
    justify-content: flex-start;
  }

  .lg\:gap-8 {
    gap: 2rem;
  }

  .lg\:gap-x-10 {
    -moz-column-gap: 2.5rem;
         column-gap: 2.5rem;
  }

  .lg\:gap-x-4 {
    -moz-column-gap: 1rem;
         column-gap: 1rem;
  }

  .lg\:gap-x-5 {
    -moz-column-gap: 1.25rem;
         column-gap: 1.25rem;
  }

  .lg\:gap-y-0 {
    row-gap: 0px;
  }

  .lg\:gap-y-10 {
    row-gap: 2.5rem;
  }

  .lg\:p-12 {
    padding: 3rem;
  }

  .lg\:p-4 {
    padding: 1rem;
  }

  .lg\:p-8 {
    padding: 2rem;
  }

  .lg\:px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .lg\:px-5 {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }

  .lg\:py-5 {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }

  .lg\:pl-16 {
    padding-left: 4rem;
  }

  .lg\:pl-20 {
    padding-left: 5rem;
  }

  .lg\:pl-32 {
    padding-left: 8rem;
  }

  .lg\:pr-24 {
    padding-right: 6rem;
  }

  .lg\:text-right {
    text-align: right;
  }

  .lg\:text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .lg\:text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
  }

  .lg\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .lg\:text-5xl {
    font-size: 3rem;
    line-height: 1;
  }

  .lg\:text-7xl {
    font-size: 4.5rem;
    line-height: 1;
  }

  .lg\:text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
  }

  .lg\:text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
  }
}

.rtl\:space-x-reverse:where([dir="rtl"], [dir="rtl"] *) > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 1;
}

.rtl\:text-right:where([dir="rtl"], [dir="rtl"] *) {
  text-align: right;
}

@media (prefers-color-scheme: dark) {
  .dark\:\!bg-gray-700 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity)) !important;
  }

  .dark\:bg-blue-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(28 100 242 / var(--tw-bg-opacity));
  }

  .dark\:bg-blue-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(35 56 118 / var(--tw-bg-opacity));
  }

  .dark\:bg-gray-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity));
  }

  .dark\:bg-gray-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity));
  }

  .dark\:text-blue-300 {
    --tw-text-opacity: 1;
    color: rgb(164 202 254 / var(--tw-text-opacity));
  }

  .dark\:text-gray-300 {
    --tw-text-opacity: 1;
    color: rgb(209 213 219 / var(--tw-text-opacity));
  }

  .dark\:text-gray-400 {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity));
  }

  .dark\:text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
  }

  .dark\:hover\:bg-blue-700:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(26 86 219 / var(--tw-bg-opacity));
  }

  .dark\:hover\:bg-gray-600:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(75 85 99 / var(--tw-bg-opacity));
  }

  .dark\:hover\:bg-gray-700:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity));
  }

  .dark\:hover\:text-white:hover {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
  }

  .dark\:focus\:ring-blue-800:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(30 66 159 / var(--tw-ring-opacity));
  }

  .dark\:focus\:ring-gray-600:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(75 85 99 / var(--tw-ring-opacity));
  }

  .group:hover .dark\:group-hover\:text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
  }
}

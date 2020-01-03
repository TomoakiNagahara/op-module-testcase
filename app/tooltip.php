<style>
/** CSS Tooltip
 * @see https://www.w3schools.com/css/css_tooltip.asp
 */

/* Common setting */
:root {
	--root-tooltip-color-text:       #eee;
	--root-tooltip-color-background: #555;
	--root-tooltip-container-background: #ffffe0;
}

/* Tooltip container */
.tooltip-container {
	position: relative;
	display:  inline-block;
}

/* If you want dots under the hoverable text */
.tooltip-container:hover {
	background-color: var(--root-tooltip-container-background);
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip-container:hover .tooltip-text {
	visibility: visible;
}

/* Tooltip text */
.tooltip-container .tooltip-text {
	color:            var(--root-tooltip-color-text);
	background-color: var(--root-tooltip-color-background);
	visibility:       hidden;
	text-align:       center;
	padding:       0.5em 1em;
	border-radius:     0.4em;

	/* Position the tooltip text - see examples below! */
	position:       absolute;
	z-index:               1;
}

/* Display tooltips on top */
.tooltip-container .tooltip-text.top {
	bottom: 150%;
}

/* Display tooltips on bottom */
.tooltip-container .tooltip-text.bottom {
	top: 150%;
}

/* Display tooltips on left */
.tooltip-container .tooltip-text.left {
	right: calc(100% + 1em);
	white-space: nowrap;
}

/* Display tooltips on right */
.tooltip-container .tooltip-text.right {
	left: calc(100% + 1em);
}

/* Tooltip arrow common setting */
.tooltip-container .tooltip-text::after {
	content: " ";
	position:  absolute;
	margin-left:   -5px;
	border-width:   5px;
	border-style: solid;
	border-color: transparent;
}

/* When the tooltip position is top. */
.tooltip-container .tooltip-text.top::after {
	top:           100%;
	left:           50%;
	border-top-color: var(--root-tooltip-color-background);
}

/* When the tooltip position is bottom. */
.tooltip-container .tooltip-text.bottom::after {
	bottom:           100%;
	left:           50%;
	border-bottom-color: var(--root-tooltip-color-background);
}

/* When the tooltip position is left. */
.tooltip-container .tooltip-text.left::after {
	top:   0.725em;
	left:     100%;
	border-left-color: var(--root-tooltip-color-background);
}

/* When the tooltip position is right. */
.tooltip-container .tooltip-text.right::after {
	top:   0.725em;
	right:    100%;
	border-right-color: var(--root-tooltip-color-background);
}

</style>
<div class="tooltip-container">
	<span class="tooltip-text top">This information is displayed only when you are an administrator.</span>
	<p>Please hover this message. When open tooltip.</p>
</div>
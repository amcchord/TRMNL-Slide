# TRMNL Framework Documentation

This documentation covers the complete TRMNL Framework v2.

Generated on: 2025-08-12 02:07:16

Source: https://usetrmnl.com/framework_v2/

---

## Table of Contents

### Utilities

- [Size](#size)
- [Spacing](#spacing)
- [Gap](#gap)
- [Flex](#flex)
- [Grid](#grid)
- [Background](#background)
- [Border](#border)
- [Rounded](#rounded)
- [Visibility](#visibility)
- [Responsive](#responsive)
- [Text](#text)
- [Image](#image)
- [Image Stroke](#image-stroke)
- [Text Stroke](#text-stroke)
- [Clamp](#clamp)
- [Scale](#scale)
- [Aspect Ratio](#aspect-ratio)
- [Responsive Test](#responsive-test)

### Base

- [Screen](#screen)
- [View](#view)
- [Layout](#layout)
- [Title Bar](#title-bar)
- [Columns](#columns)
- [Mashup](#mashup)

### Elements

- [Title](#title)
- [Value](#value)
- [Label](#label)
- [Description](#description)
- [Divider](#divider)

### Components

- [Rich Text](#rich-text)
- [Item](#item)
- [Table](#table)
- [Chart](#chart)
- [Progress](#progress)

### Modulations

- [Overflow](#overflow)
- [Format Value](#format-value)
- [Fit Value](#fit-value)
- [Content Limiter](#content-limiter)
- [Pixel Perfect](#pixel-perfect)

---

# Utilities

## Size

*Source: https://usetrmnl.com/framework_v2/size*

# Size

      The Size system provides utility classes for controlling width and height dimensions.
      It includes both fixed sizes and responsive utilities to handle various layout needs.

[#](https://usetrmnl.com/framework_v2/size#fixed-sizes)

### Fixed Sizes

Control element widths and heights using predefined size classes. Use `{size}` and `{size}` class names with these size values:

[#](https://usetrmnl.com/framework_v2/size#arbitrary-sizes)

### Arbitrary Sizes

Need a specific dimension? Use arbitrary size classes for precise pixel values with `{size}` and `{size}` syntax, where N can be any value from 0 to 1000.

[#](https://usetrmnl.com/framework_v2/size#min-max-dimensions)

### Min/Max Dimensions

Control minimum and maximum element dimensions independently using `{size}`, `{size}`, `{size}`, and `{size}` classes.

[#](https://usetrmnl.com/framework_v2/size#min-max-width)

#### Min/Max Width

Set minimum and maximum width constraints independently from the base width value.

Min Width 72 (288px)

Max Width 32 (128px)

Size
Min/Max Widths

[#](https://usetrmnl.com/framework_v2/size#min-max-height)

#### Min/Max Height

Set minimum and maximum height constraints independently. Min-height ensures elements are at least a certain height, max-height prevents them from growing beyond a limit.

Min Height 72 (288px)

Max Height 8 (32px)

Size
Min/Max Heights

[#](https://usetrmnl.com/framework_v2/size#arbitrary-min-max-dimensions)

#### Arbitrary Min/Max Dimensions

Use arbitrary min/max dimensions with `{size}`, `{size}`, `{size}`, and `{size}` syntax.

[#](https://usetrmnl.com/framework_v2/size#dynamic-sizes)

### Dynamic Sizes

Dynamic sizes allow you to set width and height values relative to the container or content, rather than using fixed pixel values.

[#](https://usetrmnl.com/framework_v2/size#dynamic-width)

#### Dynamic Width

Use `{size}` for full width or
`{size}` for automatic width.

Full Width

Auto Width

Size
Dynamic Widths

[#](https://usetrmnl.com/framework_v2/size#dynamic-height)

#### Dynamic Height

Use `{size}` for full height or
`{size}` for automatic height.

Full Height

Auto Height

Size
Dynamic Heights

[#](https://usetrmnl.com/framework_v2/size#responsive-sizes)

## Responsive Sizes

Size utilities support responsive variants, allowing you to set different dimensions at different screen breakpoints. Use the pattern `{size}` to apply sizes conditionally.

[#](https://usetrmnl.com/framework_v2/size#size-based-responsive)

### Size-Based Responsive

Apply different width and height values at different screen sizes using responsive prefixes. The framework follows a mobile-first approach where styles apply to the target breakpoint and larger.

Responsive Width

Responsive Height

Size
Responsive Sizes

[#](https://usetrmnl.com/framework_v2/size#supported-responsive-classes)

### Supported Responsive Classes

Responsive variants are available for most size utilities. Arbitrary dimensions (using the `{size}` syntax) do not support responsive variants.

| Category | Responsive Support | Example Usage |
| --- | --- | --- |
|
Fixed Sizes
|

✓ Supported

|
|
|
Full/Auto Dimensions
|

✓ Supported

|
|
|
Min/Max Dimensions
|

✓ Supported

|
|
|
Arbitrary Dimensions
|

✗ Not Supported

|
|

**Note:** Size utilities only support size-based responsive variants (sm:, md:, lg:). They do not support bit-depth responsive variants (1bit:, 2bit:, 4bit:) or combined responsive variants.

[Spacing

Control element spacing with fixed margin and padding values

Next](/framework_v2/spacing)

    [Framework Index](/framework_v2)

---

## Spacing

*Source: https://usetrmnl.com/framework_v2/spacing*

# Spacing

      The Spacing system provides utility classes for controlling margins and padding.
      It includes both fixed sizes and decimal values to handle precise spacing needs.

Available spacing sizes and their pixel values

[View Size Documentation](/framework_v2/size)

[#](https://usetrmnl.com/framework_v2/spacing#margin-utilities)

### Margin Utilities

Control element margins using these utility classes. Each class follows the pattern `py--{size}`.

`py--{size}`
All sides margin

`py--{size}`
Top margin

`py--{size}`
Right margin

`py--{size}`
Bottom margin

`py--{size}`
Left margin

`py--{size}`
Horizontal margin

`py--{size}`
Vertical margin

[#](https://usetrmnl.com/framework_v2/spacing#padding-utilities)

### Padding Utilities

Control element padding using these utility classes. Each class follows the pattern `py--{size}`.

`py--{size}`
All sides padding

`py--{size}`
Top padding

`py--{size}`
Right padding

`py--{size}`
Bottom padding

`py--{size}`
Left padding

`py--{size}`
Horizontal padding

`py--{size}`
Vertical padding

[Size

Define exact width and height dimensions for elements

Previous](/framework_v2/size)

[Gap

Set precise spacing between elements with predefined gap values

Next](/framework_v2/gap)

    [Framework Index](/framework_v2)

---

## Gap

*Source: https://usetrmnl.com/framework_v2/gap*

# Gap

      The Gap system provides consistent spacing between elements using CSS gap property. It offers predefined sizes,
      responsive spacing, and custom values to maintain visual rhythm throughout your interface.

[#](https://usetrmnl.com/framework_v2/gap#base-sizes)

### Base Sizes

The gap system includes seven predefined sizes, from xsmall to xxlarge. These standardized spaces
help maintain consistent spacing across your application's grid and flex layouts.

[#](https://usetrmnl.com/framework_v2/gap#standard-gaps)

#### Standard Gaps

Use `gap--[Npx]` for tight spacing,
`gap--[Npx]` for default spacing, and larger
variants for more generous spacing needs.

gap--xsmall

gap--xsmall

gap--xsmall

gap--small

gap--small

gap--small

gap

gap

gap

gap--medium

gap--medium

gap--medium

gap--large

gap--large

gap--large

gap--xlarge

gap--xlarge

gap--xlarge

gap--xxlarge

gap--xxlarge

gap--xxlarge

Predefined Gaps
Design System

`gap--[Npx]`

[#](https://usetrmnl.com/framework_v2/gap#distribution-modifiers)

### Distribution Modifiers

Beyond fixed gaps, you can use special modifiers to control how space is distributed between elements.
These modifiers are particularly useful for creating flexible, dynamic layouts.

[#](https://usetrmnl.com/framework_v2/gap#space-between)

#### Space Between

The `gap--[Npx]` modifier
distributes available space evenly between elements, pushing them to the edges of their container.

gap--space-between

gap--space-between

gap--space-between

Space Between Gap
Design System

`gap--[Npx]`

[#](https://usetrmnl.com/framework_v2/gap#size-based-responsive)

### Size-Based Responsive

Gap utilities support size-based responsive breakpoints, allowing you to adjust spacing based on screen dimensions.
Use prefixes like `gap--[Npx]` and `gap--[Npx]`
to apply different gap values at different screen sizes.

[#](https://usetrmnl.com/framework_v2/gap#responsive-gap-sizes)

#### Responsive Gap Sizes

Apply different gap values at different breakpoints using the size-based responsive system.
The framework follows a mobile-first approach where larger breakpoints inherit smaller ones.

Responsive Gap

Responsive Gap

Responsive Gap

Small gap by default, large on medium screens, xlarge on large screens

Responsive Gaps
Size-Based

`gap--[Npx]`

Gap utilities only support size-based responsive variants. Bit-depth variants (like `gap--[Npx]` or `gap--[Npx]`) are not available for gap classes.

[#](https://usetrmnl.com/framework_v2/gap#custom-values)

### Custom Values

When predefined gaps don't meet your specific needs, you can use custom pixel values. This provides
precise control over spacing while maintaining the consistent gap syntax.

[#](https://usetrmnl.com/framework_v2/gap#arbitrary-pixel-values)

#### Arbitrary Pixel Values

Use `gap--[Npx]` syntax to specify
exact pixel values. This works with both grid and flex layouts, but does not support responsive variants.

gap--[5px]

gap--[5px]

gap--[5px]

gap--[10px]

gap--[10px]

gap--[10px]

gap--[15px]

gap--[15px]

gap--[15px]

Custom Pixel Gaps
Design System

`gap--[Npx]`

Arbitrary gap values using the `gap--[Npx]` syntax do not support responsive variants. Use predefined gap classes if you need responsive behavior.

[Spacing

Control element spacing with fixed margin and padding values

Previous](/framework_v2/spacing)

[Flex

Arrange elements with flexible layouts and alignment options

Next](/framework_v2/flex)

    [Framework Index](/framework_v2)

---

## Flex

*Source: https://usetrmnl.com/framework_v2/flex*

# Flex

      The Flex system provides utility classes for creating flexible layouts using Flexbox.
      It supports both row and column directions with various alignment, centering, and stretching options.

[#](https://usetrmnl.com/framework_v2/flex#base-structure)

### Base Structure

The Flex system provides two fundamental ways to organize content: horizontal (row) and vertical (column) arrangements.
These base structures can be combined with alignment and stretch modifiers for complex layouts.

[#](https://usetrmnl.com/framework_v2/flex#row-direction)

#### Row Direction

Use `portrait:` to create a horizontal layout:

Item 1
Item 2
Item 3

Flex
Row Direction

`portrait:`

[#](https://usetrmnl.com/framework_v2/flex#column-direction)

#### Column Direction

Use `portrait:` to create a vertical layout:

Item 1
Item 2
Item 3

Flex
Column Direction

`portrait:`

[#](https://usetrmnl.com/framework_v2/flex#alignment-modifiers)

### Alignment Modifiers

Once you've chosen a base direction, you can apply alignment modifiers to control how items are positioned
within their container. The system provides directional alignment (left/right/top/bottom) and centering options.

[#](https://usetrmnl.com/framework_v2/flex#row-horizontal-alignment)

#### Row Horizontal Alignment

For row layouts, use `portrait:`,
`portrait:`, or
`portrait:` to control horizontal alignment:

Left

Center X

Right

Flex
Row Horizontal Alignment

`portrait:`

[#](https://usetrmnl.com/framework_v2/flex#row-vertical-alignment)

#### Row Vertical Alignment

For row layouts, use `portrait:`,
`portrait:`, or
`portrait:` to control vertical alignment:

Top

Center Y

Bottom

Flex
Row Vertical Alignment

`portrait:`

[#](https://usetrmnl.com/framework_v2/flex#column-horizontal-alignment)

#### Column Horizontal Alignment

For column layouts, use `portrait:`,
`portrait:`, or
`portrait:` to control horizontal alignment:

Left

Center X

Right

Flex
Column Horizontal Alignment

`portrait:`

[#](https://usetrmnl.com/framework_v2/flex#column-vertical-alignment)

#### Column Vertical Alignment

For column layouts, use `portrait:`,
`portrait:`, or
`portrait:` to control vertical alignment:

Top

Center Y

Bottom

Flex
Column Vertical Alignment

`portrait:`

[#](https://usetrmnl.com/framework_v2/flex#stretch-modifiers)

### Stretch Modifiers

The Flex system provides both container-level and individual item stretch controls. Container modifiers affect all children,
while item classes only affect the specific element they're applied to.

[#](https://usetrmnl.com/framework_v2/flex#container-stretch)

#### Container Stretch

Use `portrait:`,
`portrait:`, or
`portrait:` to control how children fill the container:

Stretch All

Stretch X

Stretch Y

Flex
Container Stretch

`portrait:`

[#](https://usetrmnl.com/framework_v2/flex#individual-item-stretch-row)

#### Individual Item Stretch (Row)

Use `portrait:`,
`portrait:`, or
`portrait:` on individual items in a row layout:

Stretch
Normal
Stretch

Stretch X
Normal
Stretch X

Stretch Y
Normal
Stretch Y

Flex
Item Stretch (Row)

`portrait:`

[#](https://usetrmnl.com/framework_v2/flex#individual-item-stretch-column)

#### Individual Item Stretch (Column)

Use `portrait:`,
`portrait:`, or
`portrait:` on individual items in a column layout:

Stretch
Normal
Stretch

Stretch X
Normal
Stretch X

Stretch Y
Normal
Stretch Y

Flex
Item Stretch (Column)

`portrait:`

[#](https://usetrmnl.com/framework_v2/flex#preventing-item-shrinkage)

#### Preventing Item Shrinkage

Use `portrait:` on flex children to prevent them from shrinking
when other items try to take up more space:

Can Shrink
Stretching Content That Pushes Others

Won't Shrink
Stretching Content That Pushes Others

Flex
Prevent Shrinking

`portrait:`

[#](https://usetrmnl.com/framework_v2/flex#orientation-responsive-layouts)

### Orientation-Responsive Layouts

Flexbox utilities support orientation-responsive variants, allowing you to change layouts when the screen is rotated.
This is particularly useful for adapting navigation bars, toolbars, and content grids.

[#](https://usetrmnl.com/framework_v2/flex#adaptive-direction)

#### Adaptive Direction

Use `portrait:` prefix to change flex direction or alignment
when the screen is in portrait orientation. Try rotating the device preview to see the effect.

Nav Item 1

Nav Item 2

Nav Item 3

Row in landscape, column in portrait

Flex
Orientation Responsive

`portrait:`

[Gap

Set precise spacing between elements with predefined gap values

Previous](/framework_v2/gap)

[Grid

Create grid layouts with predefined column structures

Next](/framework_v2/grid)

    [Framework Index](/framework_v2)

---

## Grid

*Source: https://usetrmnl.com/framework_v2/grid*

# Grid

      The Grid system provides a flexible way to create both column-based and row-based layouts.
      It supports various column counts, column spans, and responsive behaviors to create complex layouts easily.

[#](https://usetrmnl.com/framework_v2/grid#ways-to-define-the-grid)

### Ways to Define the Grid

The grid system provides two ways to define column layouts:
- **Column Count:** Set `end`
on the parent to create equal-width columns
- **Column Spans:** Set `end`
on individual columns to control their width

[#](https://usetrmnl.com/framework_v2/grid#column-count)

#### Column Count

Use `end` to specify any number of columns.
Here are examples with 4 and 3 columns:

Col 1/4

Col 1/4

Col 1/4

Col 1/4

Col 1/3

Col 1/3

Col 1/3

Grid
Column Count

`end`

[#](https://usetrmnl.com/framework_v2/grid#column-spans)

#### Column Spans

Use `end` to make a column
span multiple grid columns. In a grid row, the sum of all column spans should equal the total number of grid columns.
For example, you might have spans of 1 and 2, or spans of 3, 6, and 2.

Col Span 1

Col Span 2

Col Span 3

Col Span 6

Col Span 2

Grid
Column Spans

`end`

[#](https://usetrmnl.com/framework_v2/grid#column-layouts)

### Column Layouts

Use columns to create vertical layouts within the grid. Columns can be positioned and aligned using modifier classes.

[#](https://usetrmnl.com/framework_v2/grid#basic-column-layout)

#### Basic Column Layout

Use the `end` class to create vertical layouts.

Item 1
Item 2
Item 3
Item 4

Grid
Column Layout

`end`

[#](https://usetrmnl.com/framework_v2/grid#column-positioning)

#### Column Positioning

Use `end` where position can be
`end`, `end`, or `end` to control vertical alignment:

Start

Center

End

Grid
Column Positioning

`end`

[#](https://usetrmnl.com/framework_v2/grid#row-layouts)

### Row Layouts

Use rows to create horizontal layouts within the grid. Rows can be positioned and aligned using modifier classes.

[#](https://usetrmnl.com/framework_v2/grid#basic-row-layout)

#### Basic Row Layout

Use the `end` class to create horizontal layouts.

Item 1
Item 2
Item 3
Item 4

Grid
Row Layout

`end`

[#](https://usetrmnl.com/framework_v2/grid#row-positioning)

#### Row Positioning

Use `end` where position can be
`end`, `end`, or `end` to control horizontal alignment:

Start

Center

End

Grid
Row Positioning

`end`

[Flex

Arrange elements with flexible layouts and alignment options

Previous](/framework_v2/flex)

[Background

Grayscale dithered patterns optimized for 1-bit rendering

Next](/framework_v2/background)

    [Framework Index](/framework_v2)

---

## Background

*Source: https://usetrmnl.com/framework_v2/background*

# Background

      The Background system creates the illusion of grayscale through carefully designed dither patterns. When rendered on 1-bit (black and white only) displays, these patterns create an illusion of different shades of gray by using specific arrangements of black and white pixels.

[#](https://usetrmnl.com/framework_v2/background#color-palette)

### Color Palette

The complete range of background shades available in the framework, from pure black to pure white.

black
bg--black

bg--gray-10

bg--gray-15

bg--gray-20

bg--gray-25

bg--gray-30

bg--gray-35

bg--gray-40

bg--gray-45

bg--gray-50

bg--gray-55

bg--gray-60

bg--gray-65

bg--gray-70

bg--gray-75

white
bg--white

**Dark Mode Notice:** The color palette appears inverted because TRMNL's dark mode inverts the entire screen, except the images.

[#](https://usetrmnl.com/framework_v2/background#usage)

### Usage

Use the `gray-7` utility
classes to apply these background patterns to any element. Choose from sixteen values: black, gray-10 through gray-75,
and white.

black

white

Background shades

`gray-7`

[#](https://usetrmnl.com/framework_v2/background#backward-compatibility)

### Backward Compatibility

For backward compatibility, the original shade names (`gray-7` through `gray-7`) are still supported but deprecated. These map to equivalent extended shades:

`gray-7`

[Grid

Create grid layouts with predefined column structures

Previous](/framework_v2/grid)

[Border

Apply border patterns that create the illusion of different border intensities

Next](/framework_v2/border)

    [Framework Index](/framework_v2)

---

## Border

*Source: https://usetrmnl.com/framework_v2/border*

# Border

      The Border system creates the illusion of grayscale borders through carefully designed dither patterns. When rendered on 1-bit displays, these patterns create varying border intensities using alternating black and white pixels.

[#](https://usetrmnl.com/framework_v2/border#usage)

### Usage

Apply borders using `border--v-{n}` for horizontal borders
and `border--v-{n}` for vertical borders,
where n ranges from 1 (lightest) to 7 (darkest).

[#](https://usetrmnl.com/framework_v2/border#horizontal-borders)

#### Horizontal Borders

Horizontal Borders

**Dark Mode Notice:** The color palette appears inverted because TRMNL's dark mode inverts the entire screen, except the images.

`border--v-{n}`

[#](https://usetrmnl.com/framework_v2/border#vertical-borders)

#### Vertical Borders

Vertical Borders

`border--v-{n}`

[Background

Grayscale dithered patterns optimized for 1-bit rendering

Previous](/framework_v2/background)

[Rounded

Control element rounding with predefined values

Next](/framework_v2/rounded)

    [Framework Index](/framework_v2)

---

## Rounded

*Source: https://usetrmnl.com/framework_v2/rounded*

# Rounded

      The Rounded system provides consistent border radius values for creating smooth corners on elements. It offers predefined sizes,
      corner-specific controls, and custom values to maintain visual consistency throughout your interface.

[#](https://usetrmnl.com/framework_v2/rounded#base-sizes)

### Base Sizes

The rounded system includes nine predefined sizes, from none to full. These standardized radii
help maintain consistent corner rounding across your application's components.

[#](https://usetrmnl.com/framework_v2/rounded#standard-rounded)

#### Standard Rounded

Use `rounded--[Npx]` for sharp corners,
`rounded--[Npx]` for default rounding, and larger
variants for more pronounced curves.

rounded--none

rounded--xsmall

rounded--small

rounded

rounded--medium

rounded--large

rounded--xlarge

rounded--xxlarge

rounded--full

Predefined Rounded
Design System

`rounded--[Npx]`

[#](https://usetrmnl.com/framework_v2/rounded#corner-specific-rounding)

### Corner-Specific Rounding

Apply border radius to specific corners or sides of an element. This allows for more complex shapes
and asymmetric designs while maintaining consistency.

[#](https://usetrmnl.com/framework_v2/rounded#individual-corners)

#### Individual Corners

Target specific corners with `rounded--[Npx]` where
corner can be tl (top-left), tr (top-right), br (bottom-right), or bl (bottom-left).

rounded-tl--large

rounded-tr--large

rounded-bl--large

rounded-br--large

Corner-Specific Rounding
Design System

[#](https://usetrmnl.com/framework_v2/rounded#side-rounding)

#### Side Rounding

Round entire sides with `rounded--[Npx]` where
side can be t (top), r (right), b (bottom), or l (left).

rounded-t--large

rounded-r--large

rounded-b--large

rounded-l--large

Side Rounding
Design System

`rounded--[Npx]`

[#](https://usetrmnl.com/framework_v2/rounded#bit-depth-classes)

### Bit Depth Classes

Control border radius based on display bit depth. These classes allow you to apply different rounded values
for different display capabilities.

| Class | Description | Applies To |
| --- | --- | --- |
| 1bit:{rounded-class} | Apply any rounded class on 1-bit displays only | 1-bit displays |
| 4bit:{rounded-class} | Apply any rounded class on 4-bit displays and higher | 4-bit, 24-bit displays |
| 24bit:{rounded-class} | Apply any rounded class on 24-bit displays only | 24-bit displays |

`rounded--[Npx]`

[#](https://usetrmnl.com/framework_v2/rounded#custom-values)

### Custom Values

When predefined rounded values don't meet your specific needs, you can use custom pixel values. This provides
precise control over border radius while maintaining the consistent rounded syntax.

[#](https://usetrmnl.com/framework_v2/rounded#arbitrary-pixel-values)

#### Arbitrary Pixel Values

Use `rounded--[Npx]` syntax to specify
exact pixel values for border radius.

rounded--[3px]

rounded--[8px]

rounded--[12px]

rounded--[18px]

rounded--[24px]

rounded--[32px]

Custom Pixel Rounded
Design System

`rounded--[Npx]`

[Border

Apply border patterns that create the illusion of different border intensities

Previous](/framework_v2/border)

[Visibility

Control element visibility based on display bit depth

Next](/framework_v2/visibility)

    [Framework Index](/framework_v2)

---

## Visibility

*Source: https://usetrmnl.com/framework_v2/visibility*

# Visibility

      The visibility and display utilities provide comprehensive control over element visibility and display types.
      Use `sm:4bit:table` to hide elements,
      `sm:4bit:table` to show them as blocks, or choose from
      specific display types like `sm:4bit:table`,
      `sm:4bit:table`, and
      `sm:4bit:table`.
      All classes work with responsive and bit-depth prefixes for device-specific layouts.

[#](https://usetrmnl.com/framework_v2/visibility#visibility-across-devices)

## Visibility Across Devices

See how visibility classes behave across different screen sizes. Each column represents a different device size.

Small (600px)

visible md:hidden

Medium (800px)

hidden md:visible lg:hidden

Large (1024px)

hidden lg:visible

`sm:4bit:table`

[#](https://usetrmnl.com/framework_v2/visibility#display-utilities)

## Display Utilities

Control how elements are displayed with specific display types. These classes set the CSS `sm:4bit:table` property.

| Class | Effect | CSS Output |
| --- | --- | --- |
|
`sm:4bit:table`
|
Hide element completely
|
`sm:4bit:table`
|
|
`sm:4bit:table`
|
Display as block element
|
`sm:4bit:table`
|
|
`sm:4bit:table`
|
Display as block element
|
`sm:4bit:table`
|
|
`sm:4bit:table`
|
Display as inline element
|
`sm:4bit:table`
|
|
`sm:4bit:table`
|
Display as inline block element
|
`sm:4bit:table`
|
|
`sm:4bit:table`
|
Display as flex container
|
`sm:4bit:table`
|
|
`sm:4bit:table`
|
Display as grid container
|
`sm:4bit:table`
|
|
`sm:4bit:table`
|
Display as table element
|
`sm:4bit:table`
|
|
`sm:4bit:table`
|
Display as table row element
|
`sm:4bit:table`
|

[#](https://usetrmnl.com/framework_v2/visibility#responsive-display-control)

## Responsive Display Control

All display utilities work with responsive prefixes. Size prefixes are mobile-first (apply at that size and larger).
You can combine any display utility with responsive breakpoints.

| Example Class | Effect | Active On |
| --- | --- | --- |
|
`sm:4bit:table`
|
Hide on small screens and larger
|
All devices (600px+)
|
|
`sm:4bit:table`
|
Display as flex on medium screens and larger
|
TRMNL OG, TRMNL V2 (800px+)
|
|
`sm:4bit:table`
|
Display as grid on large screens
|
TRMNL V2 (1024px+)
|
|
`sm:4bit:table`
|
Display as inline-block on small screens and larger
|
All devices (600px+)
|

`sm:4bit:table`

[#](https://usetrmnl.com/framework_v2/visibility#bit-depth-display-control)

## Bit-Depth Display Control

All display utilities work with bit-depth prefixes to target specific display capabilities.
Perfect for optimizing layouts for different e-ink displays.

| Example Class | Effect | Active On |
| --- | --- | --- |
|
`sm:4bit:table`
|
Hide on monochrome displays
|
TRMNL OG only
|
|
`sm:4bit:table`
|
Display as flex on 4-shade grayscale displays
|
TRMNL OG V2 only
|
|
`sm:4bit:table`
|
Display as grid on 16-shade grayscale displays
|
TRMNL V2, Kindle 2024 only
|

[#](https://usetrmnl.com/framework_v2/visibility#device-specific-display-control)

## Device-Specific Display Control

Combine size and bit-depth prefixes with any display utility to target specific devices precisely.
Use the pattern: `sm:4bit:table`

| Example Class | Target Device | Effect |
| --- | --- | --- |
|
`sm:4bit:table`
|
TRMNL OG only
|
Display as block (800px, monochrome)
|
|
`sm:4bit:table`
|
TRMNL OG V2 only
|
Display as flex (800px, 4-shade grayscale)
|
|
`sm:4bit:table`
|
TRMNL V2 only
|
Display as grid (1024px, 16-shade grayscale)
|
|
`sm:4bit:table`
|
Kindle 2024 only
|
Display as table (600px, 16-shade grayscale)
|

`sm:4bit:table`

[Rounded

Control element rounding with predefined values

Previous](/framework_v2/rounded)

[Responsive

Adapt styles based on screen width using breakpoint prefixes

Next](/framework_v2/responsive)

    [Framework Index](/framework_v2)

---

## Responsive

*Source: https://usetrmnl.com/framework_v2/responsive*

# Responsive

      The Responsive system provides two complementary approaches for creating adaptive layouts:
      **Size-based** breakpoints that respond to screen dimensions, and **Bit-depth**
      variants that adapt to color capabilities. Together, they enable precise control over how your content
      appears across TRMNL's diverse range of devices.

[#](https://usetrmnl.com/framework_v2/responsive#size-based-responsive)

## Size-Based Responsive

[#](https://usetrmnl.com/framework_v2/responsive#how-it-works)

### How It Works

Each device automatically sets a size class (e.g., `image--fit-cover`) based on its width, activating the appropriate responsive utilities.

The system follows a mobile-first approach. When you use `image--fit-cover`, it applies on medium screens and larger.

[#](https://usetrmnl.com/framework_v2/responsive#basic-usage)

### Basic Usage

Prefix any utility class with a breakpoint name followed by a colon. The style applies
at that breakpoint and all larger sizes.

Responsive Value

Responsive
Size Based

This example shows progressive sizing: the text starts at regular size, becomes large on medium screens (md:) and larger, then becomes xlarge on large screens (lg:) and larger.

`image--fit-cover`

[#](https://usetrmnl.com/framework_v2/responsive#available-breakpoints)

### Available Breakpoints

Three standard breakpoints cover all current supported TRMNL devices. Each breakpoint
represents a minimum screen width.

| Prefix | Screen Class | Min Width | Example Devices |
| --- | --- | --- | --- |
|
`image--fit-cover`
|
`image--fit-cover`
| 600px |
Kindle 2024
|
|
`image--fit-cover`
|
`image--fit-cover`
| 800px |
TRMNL OG, TRMNL OG V2
|
|
`image--fit-cover`
|
`image--fit-cover`
| 1024px |
TRMNL V2
|

[#](https://usetrmnl.com/framework_v2/responsive#bit-depth-responsive)

## Bit-Depth Responsive

[#](https://usetrmnl.com/framework_v2/responsive#how-it-works-1)

### How It Works

Bit-depth responsiveness adapts styles based on the display's color capabilities.
Unlike size-based breakpoints, bit-depth variants are not progressive - each
variant targets a specific bit-depth only.

When you use `image--fit-cover`, it applies only on 4-bit screens, not on 1-bit or 2-bit screens.

[#](https://usetrmnl.com/framework_v2/responsive#basic-usage-1)

### Basic Usage

Prefix utilities with bit-depth values to create display-specific styles. This is especially
useful for optimizing appearance across monochrome and grayscale screens.

Responsive
Bit Depth

This example demonstrates bit-depth adaptation: the square appears black on 1-bit displays, gray-45 on 2-bit displays, and gray-75 on 4-bit displays. Each bit-depth variant targets only that specific display type.

`image--fit-cover`

[#](https://usetrmnl.com/framework_v2/responsive#available-bit-depths)

### Available Bit-Depths

The framework supports three bit-depth variants corresponding to TRMNL's display technologies.
Each targets specific color capabilities.

| Prefix | Screen Class | Color Support | Example Devices |
| --- | --- | --- | --- |
|
`image--fit-cover`
|
`image--fit-cover`
|
Monochrome (2 shades)
|
TRMNL OG
|
|
`image--fit-cover`
|
`image--fit-cover`
|
Grayscale (4 shades)
|
TRMNL OG V2
|
|
`image--fit-cover`
|
`image--fit-cover`
|
Grayscale (16 shades)
|
TRMNL V2, Kindle 2024
|

[#](https://usetrmnl.com/framework_v2/responsive#orientation-based-responsive)

## Orientation-Based Responsive

[#](https://usetrmnl.com/framework_v2/responsive#how-it-works-2)

### How It Works

Orientation variants adapt styles based on whether the screen is in landscape or portrait mode.
Since landscape is the default, only `image--fit-cover`
variants are provided to avoid redundancy.

Portrait variants are particularly useful for layout utilities like Flexbox, where you might want different
flex directions or alignments when the screen is rotated.

[#](https://usetrmnl.com/framework_v2/responsive#basic-usage-2)

### Basic Usage

Use the `image--fit-cover` prefix to apply styles
only when the screen is in portrait orientation:

Item 1

Item 2

Item 3

Responsive
Orientation Based

This example shows orientation-responsive layout: items are arranged in a row by default (landscape), but automatically switch to a column layout when the screen is in portrait orientation using `image--fit-cover`.

`image--fit-cover`

[#](https://usetrmnl.com/framework_v2/responsive#combining-all-systems)

## Combining All Systems

The responsive system lets you combine size, orientation, and bit-depth variants.
This enables highly targeted designs that adapt to screen dimensions, orientation, and color capabilities.

Aa
TRMNL OG

Aa
TRMNL OG V2

Aa
TRMNL V2

Responsive
Advanced Targeting

This advanced example combines size and bit-depth variants to target specific device configurations: `image--fit-cover` targets medium+ 1-bit screens, `image--fit-cover` targets medium+ 2-bit screens, and `image--fit-cover` targets large+ 4-bit screens.

`image--fit-cover`

[#](https://usetrmnl.com/framework_v2/responsive#pattern-and-order)

### Pattern and Order

When combining variants, follow this pattern:
`image--fit-cover`.
This order flows from general layout concerns to specific display characteristics.

Each modifier is optional and can be used independently. You might use just
`image--fit-cover` for orientation-specific layouts,
or `image--fit-cover` for size-responsive typography,
depending on your design needs.

[#](https://usetrmnl.com/framework_v2/responsive#specificity-hierarchy)

### Specificity Hierarchy

When multiple responsive variants target the same property, CSS specificity determines which style applies.
The framework follows a clear hierarchy: the more modifiers in a class, the higher its specificity.

For example, `image--fit-cover` will
override both `image--fit-cover` and
`image--fit-cover` when all conditions are met,
because it has the most specific combination of modifiers.

[#](https://usetrmnl.com/framework_v2/responsive#available-combinations)

### Available Combinations

The responsive system supports flexible modifier combinations, allowing you to target specific
device configurations. The table below shows all available patterns, from simple single modifiers
to complex multi-modifier combinations. Each combination becomes active only when all its
conditions are met.

| Pattern | Example | When Active | Use Case |
| --- | --- | --- | --- |
|
`image--fit-cover`
|
`image--fit-cover`
|
Medium screens and larger
|
Responsive sizing based on screen width
|
|
`image--fit-cover`
|
`image--fit-cover`
|
Portrait orientation only
|
Layout adjustments for vertical screens
|
|
`image--fit-cover`
|
`image--fit-cover`
|
4-bit displays only
|
Color optimization for specific displays
|
|
`image--fit-cover`
|
`image--fit-cover`
|
Medium+ screens in portrait
|
Size-aware orientation layouts
|
|
`image--fit-cover`
|
`image--fit-cover`
|
Large+ screens with 2-bit display
|
Display-specific sizing on larger screens
|
|
`image--fit-cover`
|
`image--fit-cover`
|
Portrait with 2-bit display
|
Orientation-aware display optimization
|
|
`image--fit-cover`
|
`image--fit-cover`
|
Medium+ screens, portrait, 4-bit display
|
Highly specific device targeting
|

[#](https://usetrmnl.com/framework_v2/responsive#component-support)

## Component Support

Not all framework components support responsive variants. We're trying to keep the framework as minimal as we can while offering the features you need.

[#](https://usetrmnl.com/framework_v2/responsive#component-support-overview)

### Component Support Overview

This table shows which responsive features each framework component supports.
Use this reference to understand what's possible with each component type.

| Component | Size | Orientation | Bit-Depth | Example Usage |
| --- | --- | --- | --- | --- |
|
Background
|

  Yes

|

  No

|

  Auto

|
`image--fit-cover`
|
|
Border
|

  No

|

  No

|

  Auto

|
`image--fit-cover`
|
|
Text
|

  Yes

|

  Yes

|

  Yes

|
`image--fit-cover`
|
|
Value
|

  Yes

|

  Yes

|

  Yes

|
`image--fit-cover`
|
|
Visibility
|

  Yes

|

  Yes

|

  Yes

|
`image--fit-cover`
|
|
Spacing
|

  Yes

|

  No

|

  No

|
`image--fit-cover`
|
|
Layout
|

  Yes

|

  Yes

|

  No

|
`image--fit-cover`
|
|
Gap
|

  Yes

|

  No

|

  No

|
`image--fit-cover`
|
|
Flexbox
|

  Yes

|

  Yes

|

  No

|
`image--fit-cover`
|
|
Rounded
|

  Yes

|

  No

|

  No

|
`image--fit-cover`
|
|
Size
|

  Yes

|

  No

|

  No

|
`image--fit-cover`
|
|
Grid
|

  No

|

  No

|

  No

|
`image--fit-cover`
|
|
Clamp
|

  No

|

  No

|

  No

|
`image--fit-cover`
|
|
Effects
|

  No

|

  No

|

  No

|
`image--fit-cover`
|
|
Image
|

  No

|

  No

|

  No

|
`image--fit-cover`
|

**Legend:**

Yes = Full support

No = Not supported

Auto = Built-in adaptive behavior

When a component doesn't support responsive variants, you can often achieve similar results by conditionally applying different utility classes at the template level.

[Visibility

Control element visibility based on display bit depth

Previous](/framework_v2/visibility)

[Text

Control text color, alignment and formatting

Next](/framework_v2/text)

    [Framework Index](/framework_v2)

---

## Text

*Source: https://usetrmnl.com/framework_v2/text*

# Text

      The Text Color system creates the illusion of grayscale text through carefully designed dither patterns. When rendered on 1-bit (black and white only) displays, these patterns create an illusion of different shades of gray by using specific arrangements of black and white pixels.

[#](https://usetrmnl.com/framework_v2/text#usage)

### Usage

Use the `gray-7` utility
classes to apply these text color patterns to any element. Choose from sixteen values: black, gray-10 through gray-75,
and white.

Aa
black

Aa
gray-10

Aa
gray-15

Aa
gray-20

Aa
gray-25

Aa
gray-30

Aa
gray-35

Aa
gray-40

Aa
gray-45

Aa
gray-50

Aa
gray-55

Aa
gray-60

Aa
gray-65

Aa
gray-70

Aa
gray-75

Aa
white

Aa
black

Aa
gray-10

Aa
gray-15

Aa
gray-20

Aa
gray-25

Aa
gray-30

Aa
gray-35

Aa
gray-40

Aa
gray-45

Aa
gray-50

Aa
gray-55

Aa
gray-60

Aa
gray-65

Aa
gray-70

Aa
gray-75

Aa
white

Text color shades

**Dark Mode Notice:** The color palette appears inverted because TRMNL's dark mode inverts the entire screen, except the images.

`gray-7`

[#](https://usetrmnl.com/framework_v2/text#backward-compatibility)

### Backward Compatibility

For backward compatibility, the original shade names (`gray-7` through `gray-7`) are still supported but deprecated. These map to equivalent extended shades:

`gray-7`

[#](https://usetrmnl.com/framework_v2/text#text-alignment)

### Text Alignment

Control text alignment using the alignment utility classes. Options include left, center, right, and justify alignment.

This text is left-aligned. This is the default alignment for most text content.

This text is center-aligned. Useful for headings and important content.

This text is right-aligned. Often used for numerical data or RTL languages.

This text is justified. Creates even text edges on both sides but affects readability. Useful for multi-column text layouts.

Text
Alignment

`gray-7`

[Responsive

Adapt styles based on screen width using breakpoint prefixes

Previous](/framework_v2/responsive)

[Image

Optimize images using dithering techniques for 1-bit rendering

Next](/framework_v2/image)

    [Framework Index](/framework_v2)

---

## Image

*Source: https://usetrmnl.com/framework_v2/image*

# Image

      Image creates the illusion of grayscale through carefully designed dither patterns. When rendered on 1-bit (black and white only) displays, these patterns create an illusion of different shades of gray by using specific arrangements of black and white pixels.

[#](https://usetrmnl.com/framework_v2/image#dithering)

### Dithering

Use the class `image--dither` to dither an image.

Image

`image--dither`

[#](https://usetrmnl.com/framework_v2/image#object-fit)

### Object Fit

Control how images are displayed when not shown in their original aspect ratio.

[#](https://usetrmnl.com/framework_v2/image#options)

#### Options

- **Fill (Default):** The image is resized to fill the given dimension. If necessary, the image will be stretched or squished to fit.
- **Contain:** The image keeps its aspect ratio, but is resized to fit within the given dimension.
- **Cover:** The image keeps its aspect ratio and fills the given dimension. The image will be clipped to fit.

Fill

Contain

Cover

Object Fit Options

`image--dither`

[Text

Control text color, alignment and formatting

Previous](/framework_v2/text)

[Image Stroke

Legible images when displayed on shaded backgrounds

Next](/framework_v2/image_stroke)

    [Framework Index](/framework_v2)

---

## Image Stroke

*Source: https://usetrmnl.com/framework_v2/image_stroke*

# Image Stroke

      The Image Stroke system allows you to add an outline to a vector or transparent raster images with customizable stroke width and color. This is useful for creating images that stand out against shaded backgrounds.

[#](https://usetrmnl.com/framework_v2/image_stroke#usage)

### Usage

The Image Stroke system includes preset size modifiers that allow you to quickly apply different stroke widths to your images. The default stroke is 1.5px white, with additional options for small (1px), medium (2px), large (2.5px), and extra large (3px).

No Stroke

Small

Default

Medium

Large

Extra Large

Image Stroke
Preset Sizes

```
<img src="/images/trmnl--glyph-white.svg" />
<img class="image-stroke image-stroke--black image-stroke--small" src="/images/trmnl--glyph-white.svg" />
<img class="image-stroke image-stroke--black" src="/images/trmnl--glyph-white.svg" />
<img class="image-stroke image-stroke--black image-stroke--medium" src="/images/trmnl--glyph-white.svg" />
<img class="image-stroke image-stroke--black image-stroke--large" src="/images/trmnl--glyph-white.svg" />
<img class="image-stroke image-stroke--black image-stroke--xlarge" src="/images/trmnl--glyph-white.svg" />
```

          [#](https://usetrmnl.com/framework_v2/image_stroke#stroke-colors)

### Stroke Colors

            Use the black modifier for images on dark backgrounds.

                                No Stroke

                                Small

                                Default

                                Medium

                                Large

                                Extra Large

                      Image Stroke
                      Color Variants

	```
<img src="/images/trmnl--glyph-white.svg" />
<img class="image-stroke image-stroke--black image-stroke--small" src="/images/trmnl--glyph-white.svg" />
<img class="image-stroke image-stroke--black" src="/images/trmnl--glyph-white.svg" />
<img class="image-stroke image-stroke--black image-stroke--medium" src="/images/trmnl--glyph-white.svg" />
<img class="image-stroke image-stroke--black image-stroke--large" src="/images/trmnl--glyph-white.svg" />
<img class="image-stroke image-stroke--black image-stroke--xlarge" src="/images/trmnl--glyph-white.svg" />
```

[Image

Optimize images using dithering techniques for 1-bit rendering

Previous](/framework_v2/image)

[Text Stroke

Legible text when displayed on shaded backgrounds

Next](/framework_v2/text_stroke)

    [Framework Index](/framework_v2)

---

## Text Stroke

*Source: https://usetrmnl.com/framework_v2/text_stroke*

# Text Stroke

      The Text Stroke system allows you to add outlined text with customizable stroke width and color. This is useful for creating text that stands out against shaded backgrounds.

[#](https://usetrmnl.com/framework_v2/text_stroke#usage)

### Usage

The Text Stroke system includes preset size modifiers that allow you to quickly apply different stroke widths to your text. The default stroke is 3.5px white, with additional options for small (2px), medium (4.5px), large (6px), and extra large (7.5px).

Aa
No Stroke

Aa
Small

Aa
Default

Aa
Medium

Aa
Large

Aa
Extra Large

Text Stroke
Preset Sizes

```
<span class="value value--large text--white">Aa</span>
<span class="value value--large text--white text-stroke text-stroke--small text-stroke--black">Aa</span>
<span class="value value--large text--white text-stroke text-stroke--black">Aa</span>
<span class="value value--large text--white text-stroke text-stroke--medium text-stroke--black">Aa</span>
<span class="value value--large text--white text-stroke text-stroke--large text-stroke--black">Aa</span>
<span class="value value--large text--white text-stroke text-stroke--xlarge text-stroke--black">Aa</span>
```

          [#](https://usetrmnl.com/framework_v2/text_stroke#stroke-colors)

### Stroke Colors

            Use the black modifier for text on dark backgrounds.

                                Aa
                                No Stroke

                                Aa
                                Small

                                Aa
                                Default

                                Aa
                                Medium

                                Aa
                                Large

                                Aa
                                Extra Large

                      Text Stroke
                      Color Variants

	```
<span class="value value--large text--white">Aa</span>
<span class="value value--large text--white text-stroke text-stroke--small text-stroke--black">Aa</span>
<span class="value value--large text--white text-stroke text-stroke--black">Aa</span>
<span class="value value--large text--white text-stroke text-stroke--medium text-stroke--black">Aa</span>
<span class="value value--large text--white text-stroke text-stroke--large text-stroke--black">Aa</span>
<span class="value value--large text--white text-stroke text-stroke--xlarge text-stroke--black">Aa</span>
```

[Image Stroke

Legible images when displayed on shaded backgrounds

Previous](/framework_v2/image_stroke)

[Clamp

Manage text overflow with single and multi-line truncation

Next](/framework_v2/clamp)

    [Framework Index](/framework_v2)

---

## Clamp

*Source: https://usetrmnl.com/framework_v2/clamp*

# Clamp

      The Clamp system provides a way to truncate text content with ellipsis after a specified number of lines.
      Using classes from `clamp--none` to
      `clamp--none`,
      you can precisely control how many lines of text to display before truncating.

[#](https://usetrmnl.com/framework_v2/clamp#text-clamping-options)

### Text Clamping Options

Text can be clamped to either a single line or multiple lines, depending on your layout needs.
The clamp system uses CSS line-clamp properties to ensure consistent truncation across browsers.

[#](https://usetrmnl.com/framework_v2/clamp#single-line-clamp)

#### Single Line Clamp

The `clamp--none` class truncates text to a single line,
adding an ellipsis when content overflows.

Clamp 1

This text is clamped to a single line. Any overflow will be truncated with an ellipsis.

Clamp 1

This text is clamped to a single line. Any overflow will be truncated with an ellipsis.

Clamp 1

This text is clamped to a single line. Any overflow will be truncated with an ellipsis.

Single Line Clamp
Design System

`clamp--none`

[#](https://usetrmnl.com/framework_v2/clamp#multi-line-clamp)

#### Multi-line Clamp

The `clamp--none` classes (where n is any number from 1 to 35)
allow you to control exactly how many lines of text to display before truncating with an ellipsis. This gives you precise control over text display
while maintaining layout consistency.

Clamp 3

This text is clamped to three lines. It will show up to three lines of text before truncating with an ellipsis.
Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Clamp 3

This text is clamped to three lines. It will show up to three lines of text before truncating with an ellipsis.
Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Clamp 3

This text is clamped to three lines. It will show up to three lines of text before truncating with an ellipsis.
Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Multi-line Clamp
Design System

`clamp--none`

[#](https://usetrmnl.com/framework_v2/clamp#removing-text-clamping)

### Removing Text Clamping

The `clamp--none` class allows you to remove any clamping applied to an element,
restoring normal text flow and word wrapping behavior. This will reset text overflow handling, remove line clamping, and allow text to break naturally at word boundaries.

`clamp--none`

[Text Stroke

Legible text when displayed on shaded backgrounds

Previous](/framework_v2/text_stroke)

[Scale

Scale interface to affect content density and readability

Next](/framework_v2/scale)

    [Framework Index](/framework_v2)

---

## Scale

*Source: https://usetrmnl.com/framework_v2/scale*

# Scale

      The Scale system provides utility classes to scale the entire interface by adjusting the UI scale factor.
      This is useful for adapting content density for different viewing distances or user preferences.

[#](https://usetrmnl.com/framework_v2/scale#basic-usage)

### Basic Usage

Apply scale modifiers to the `screen screen--amazon_kindle_2024 screen--scale-large` element to scale all interface elements proportionally.
The scale affects fonts, spacing, dimensions, and other UI elements that use the `screen screen--amazon_kindle_2024 screen--scale-large` CSS variable.

[#](https://usetrmnl.com/framework_v2/scale#available-scale-levels)

#### Available Scale Levels

The framework provides six predefined scale levels:

| Class | Scale Factor | Use Case |
| --- | --- | --- |
|
`screen screen--amazon_kindle_2024 screen--scale-large`
|
0.75 (75%)
|
Maximum content density
|
|
`screen screen--amazon_kindle_2024 screen--scale-large`
|
0.875 (87.5%)
|
Increased content density
|
|
`screen screen--amazon_kindle_2024 screen--scale-large`
|
1.0 (100%)
|
Default scale, no scaling applied
|
|
`screen screen--amazon_kindle_2024 screen--scale-large`
|
1.125 (112.5%)
|
Increased size for better readability
|
|
`screen screen--amazon_kindle_2024 screen--scale-large`
|
1.25 (125%)
|
Large scale for increased readability
|
|
`screen screen--amazon_kindle_2024 screen--scale-large`
|
1.5 (150%)
|
Maximum scale for accessibility needs
|

[#](https://usetrmnl.com/framework_v2/scale#scale-examples)

### Scale Examples

The following examples demonstrate how scale levels affect the same content layout. Notice how all elements scale proportionally.

[#](https://usetrmnl.com/framework_v2/scale#extra-small-scale-75)

#### Extra Small Scale (75%)

Maximum content density - useful when viewing up close or when you need to fit more information on screen.

Today
1Morning MeetingTeam sync and updates9:00 AM - 9:30 AMDaily
2Code ReviewReview feature branch10:30 AM - 11:30 AMReview
3Lunch BreakTeam lunch at downtown12:30 PM - 1:30 PMBreak
4Client CallWeekly check-in with stakeholders2:00 PM - 3:00 PMClient
5Bug TriagePrioritize reported issues3:30 PM - 4:30 PMBugs
6Documentation UpdateUpdate API documentation4:30 PM - 5:30 PMDocs
7End of Day SyncReview progress and blockers5:30 PM - 6:00 PMSync

Tomorrow
1Sprint PlanningPlan next two weeks10:00 AM - 12:00 PMPlanning
2Client DemoShow new features2:00 PM - 3:00 PMDemo
3Architecture ReviewDiscuss system design4:00 PM - 5:00 PMTechnical
4Stakeholder MeetingProject milestone review9:00 AM - 10:00 AMStakeholder
5QA TestingRegression test suite1:00 PM - 2:00 PMQA
6Design WorkshopUI/UX design session3:00 PM - 4:00 PMDesign
7Technical Debt ReviewAssess code quality issues5:00 PM - 6:00 PMTechnical

This Week
1Security AuditQuarterly security reviewWednesdaySecurity
2Team RetrospectiveSprint reflectionFridayRetrospective
3Performance TestingLoad test new featuresThursdayTesting
4Database OptimizationQuery performance tuningWednesdayDatabase
5Code CleanupRefactor legacy modulesFridayRefactor
6Deployment PrepPrepare release candidateFridayDeploy
7Knowledge TransferOnboard new team memberThursdayTraining
8Sprint ReviewDemo completed workFridayReview
9API DocumentationUpdate endpoint specificationsWednesdayDocumentation
10User TestingConduct usability studiesThursdayUX Research
11Infrastructure ReviewAssess server capacity needsMondayInfrastructure
12Bug PrioritizationTriage reported issuesTuesdayBug Triage
13Feature PlanningRoadmap discussion for Q2ThursdayPlanning
14Third-party IntegrationImplement payment gatewayWednesdayIntegration
15Accessibility AuditWCAG compliance reviewFridayAccessibility
16Monitoring SetupConfigure alerting systemsTuesdayDevOps
17Data MigrationMove legacy customer dataWeekendMigration
18License RenewalUpdate software licensesMondayLegal
19Team TrainingNew framework workshopFridayEducation
20Release NotesDocument feature changesThursdayCommunication

Scale Level
Extra Small (75%)

`screen screen--amazon_kindle_2024 screen--scale-large`

[#](https://usetrmnl.com/framework_v2/scale#small-scale-87-5)

#### Small Scale (87.5%)

Reduced scale for fitting more content while maintaining good readability.

Today
1Morning MeetingTeam sync and updates9:00 AM - 9:30 AMDaily
2Code ReviewReview feature branch10:30 AM - 11:30 AMReview
3Lunch BreakTeam lunch at downtown12:30 PM - 1:30 PMBreak
4Client CallWeekly check-in with stakeholders2:00 PM - 3:00 PMClient
5Bug TriagePrioritize reported issues3:30 PM - 4:30 PMBugs
6Documentation UpdateUpdate API documentation4:30 PM - 5:30 PMDocs
7End of Day SyncReview progress and blockers5:30 PM - 6:00 PMSync

Tomorrow
1Sprint PlanningPlan next two weeks10:00 AM - 12:00 PMPlanning
2Client DemoShow new features2:00 PM - 3:00 PMDemo
3Architecture ReviewDiscuss system design4:00 PM - 5:00 PMTechnical
4Stakeholder MeetingProject milestone review9:00 AM - 10:00 AMStakeholder
5QA TestingRegression test suite1:00 PM - 2:00 PMQA
6Design WorkshopUI/UX design session3:00 PM - 4:00 PMDesign
7Technical Debt ReviewAssess code quality issues5:00 PM - 6:00 PMTechnical

This Week
1Security AuditQuarterly security reviewWednesdaySecurity
2Team RetrospectiveSprint reflectionFridayRetrospective
3Performance TestingLoad test new featuresThursdayTesting
4Database OptimizationQuery performance tuningWednesdayDatabase
5Code CleanupRefactor legacy modulesFridayRefactor
6Deployment PrepPrepare release candidateFridayDeploy
7Knowledge TransferOnboard new team memberThursdayTraining
8Sprint ReviewDemo completed workFridayReview
9API DocumentationUpdate endpoint specificationsWednesdayDocumentation
10User TestingConduct usability studiesThursdayUX Research
11Infrastructure ReviewAssess server capacity needsMondayInfrastructure
12Bug PrioritizationTriage reported issuesTuesdayBug Triage
13Feature PlanningRoadmap discussion for Q2ThursdayPlanning
14Third-party IntegrationImplement payment gatewayWednesdayIntegration
15Accessibility AuditWCAG compliance reviewFridayAccessibility
16Monitoring SetupConfigure alerting systemsTuesdayDevOps
17Data MigrationMove legacy customer dataWeekendMigration
18License RenewalUpdate software licensesMondayLegal
19Team TrainingNew framework workshopFridayEducation
20Release NotesDocument feature changesThursdayCommunication

Scale Level
Small (87.5%)

`screen screen--amazon_kindle_2024 screen--scale-large`

[#](https://usetrmnl.com/framework_v2/scale#regular-scale-100)

#### Regular Scale (100%)

Default scale - this is the baseline that all other scale levels are relative to.

Today
1Morning MeetingTeam sync and updates9:00 AM - 9:30 AMDaily
2Code ReviewReview feature branch10:30 AM - 11:30 AMReview
3Lunch BreakTeam lunch at downtown12:30 PM - 1:30 PMBreak
4Client CallWeekly check-in with stakeholders2:00 PM - 3:00 PMClient
5Bug TriagePrioritize reported issues3:30 PM - 4:30 PMBugs
6Documentation UpdateUpdate API documentation4:30 PM - 5:30 PMDocs
7End of Day SyncReview progress and blockers5:30 PM - 6:00 PMSync

Tomorrow
1Sprint PlanningPlan next two weeks10:00 AM - 12:00 PMPlanning
2Client DemoShow new features2:00 PM - 3:00 PMDemo
3Architecture ReviewDiscuss system design4:00 PM - 5:00 PMTechnical
4Stakeholder MeetingProject milestone review9:00 AM - 10:00 AMStakeholder
5QA TestingRegression test suite1:00 PM - 2:00 PMQA
6Design WorkshopUI/UX design session3:00 PM - 4:00 PMDesign
7Technical Debt ReviewAssess code quality issues5:00 PM - 6:00 PMTechnical

This Week
1Security AuditQuarterly security reviewWednesdaySecurity
2Team RetrospectiveSprint reflectionFridayRetrospective
3Performance TestingLoad test new featuresThursdayTesting
4Database OptimizationQuery performance tuningWednesdayDatabase
5Code CleanupRefactor legacy modulesFridayRefactor
6Deployment PrepPrepare release candidateFridayDeploy
7Knowledge TransferOnboard new team memberThursdayTraining
8Sprint ReviewDemo completed workFridayReview
9API DocumentationUpdate endpoint specificationsWednesdayDocumentation
10User TestingConduct usability studiesThursdayUX Research
11Infrastructure ReviewAssess server capacity needsMondayInfrastructure
12Bug PrioritizationTriage reported issuesTuesdayBug Triage
13Feature PlanningRoadmap discussion for Q2ThursdayPlanning
14Third-party IntegrationImplement payment gatewayWednesdayIntegration
15Accessibility AuditWCAG compliance reviewFridayAccessibility
16Monitoring SetupConfigure alerting systemsTuesdayDevOps
17Data MigrationMove legacy customer dataWeekendMigration
18License RenewalUpdate software licensesMondayLegal
19Team TrainingNew framework workshopFridayEducation
20Release NotesDocument feature changesThursdayCommunication

Scale Level
Regular (100%)

`screen screen--amazon_kindle_2024 screen--scale-large`

[#](https://usetrmnl.com/framework_v2/scale#large-scale-112-5)

#### Large Scale (112.5%)

Increased size for better readability

Today
1Morning MeetingTeam sync and updates9:00 AM - 9:30 AMDaily
2Code ReviewReview feature branch10:30 AM - 11:30 AMReview
3Lunch BreakTeam lunch at downtown12:30 PM - 1:30 PMBreak
4Client CallWeekly check-in with stakeholders2:00 PM - 3:00 PMClient
5Bug TriagePrioritize reported issues3:30 PM - 4:30 PMBugs
6Documentation UpdateUpdate API documentation4:30 PM - 5:30 PMDocs
7End of Day SyncReview progress and blockers5:30 PM - 6:00 PMSync

Tomorrow
1Sprint PlanningPlan next two weeks10:00 AM - 12:00 PMPlanning
2Client DemoShow new features2:00 PM - 3:00 PMDemo
3Architecture ReviewDiscuss system design4:00 PM - 5:00 PMTechnical
4Stakeholder MeetingProject milestone review9:00 AM - 10:00 AMStakeholder
5QA TestingRegression test suite1:00 PM - 2:00 PMQA
6Design WorkshopUI/UX design session3:00 PM - 4:00 PMDesign
7Technical Debt ReviewAssess code quality issues5:00 PM - 6:00 PMTechnical

This Week
1Security AuditQuarterly security reviewWednesdaySecurity
2Team RetrospectiveSprint reflectionFridayRetrospective
3Performance TestingLoad test new featuresThursdayTesting
4Database OptimizationQuery performance tuningWednesdayDatabase
5Code CleanupRefactor legacy modulesFridayRefactor
6Deployment PrepPrepare release candidateFridayDeploy
7Knowledge TransferOnboard new team memberThursdayTraining
8Sprint ReviewDemo completed workFridayReview
9API DocumentationUpdate endpoint specificationsWednesdayDocumentation
10User TestingConduct usability studiesThursdayUX Research
11Infrastructure ReviewAssess server capacity needsMondayInfrastructure
12Bug PrioritizationTriage reported issuesTuesdayBug Triage
13Feature PlanningRoadmap discussion for Q2ThursdayPlanning
14Third-party IntegrationImplement payment gatewayWednesdayIntegration
15Accessibility AuditWCAG compliance reviewFridayAccessibility
16Monitoring SetupConfigure alerting systemsTuesdayDevOps
17Data MigrationMove legacy customer dataWeekendMigration
18License RenewalUpdate software licensesMondayLegal
19Team TrainingNew framework workshopFridayEducation
20Release NotesDocument feature changesThursdayCommunication

Scale Level
Large (112.5%)

`screen screen--amazon_kindle_2024 screen--scale-large`

[#](https://usetrmnl.com/framework_v2/scale#extra-large-scale-125)

#### Extra Large Scale (125%)

Large scale for increased readability

Today
1Morning MeetingTeam sync and updates9:00 AM - 9:30 AMDaily
2Code ReviewReview feature branch10:30 AM - 11:30 AMReview
3Lunch BreakTeam lunch at downtown12:30 PM - 1:30 PMBreak
4Client CallWeekly check-in with stakeholders2:00 PM - 3:00 PMClient
5Bug TriagePrioritize reported issues3:30 PM - 4:30 PMBugs
6Documentation UpdateUpdate API documentation4:30 PM - 5:30 PMDocs
7End of Day SyncReview progress and blockers5:30 PM - 6:00 PMSync

Tomorrow
1Sprint PlanningPlan next two weeks10:00 AM - 12:00 PMPlanning
2Client DemoShow new features2:00 PM - 3:00 PMDemo
3Architecture ReviewDiscuss system design4:00 PM - 5:00 PMTechnical
4Stakeholder MeetingProject milestone review9:00 AM - 10:00 AMStakeholder
5QA TestingRegression test suite1:00 PM - 2:00 PMQA
6Design WorkshopUI/UX design session3:00 PM - 4:00 PMDesign
7Technical Debt ReviewAssess code quality issues5:00 PM - 6:00 PMTechnical

This Week
1Security AuditQuarterly security reviewWednesdaySecurity
2Team RetrospectiveSprint reflectionFridayRetrospective
3Performance TestingLoad test new featuresThursdayTesting
4Database OptimizationQuery performance tuningWednesdayDatabase
5Code CleanupRefactor legacy modulesFridayRefactor
6Deployment PrepPrepare release candidateFridayDeploy
7Knowledge TransferOnboard new team memberThursdayTraining
8Sprint ReviewDemo completed workFridayReview
9API DocumentationUpdate endpoint specificationsWednesdayDocumentation
10User TestingConduct usability studiesThursdayUX Research
11Infrastructure ReviewAssess server capacity needsMondayInfrastructure
12Bug PrioritizationTriage reported issuesTuesdayBug Triage
13Feature PlanningRoadmap discussion for Q2ThursdayPlanning
14Third-party IntegrationImplement payment gatewayWednesdayIntegration
15Accessibility AuditWCAG compliance reviewFridayAccessibility
16Monitoring SetupConfigure alerting systemsTuesdayDevOps
17Data MigrationMove legacy customer dataWeekendMigration
18License RenewalUpdate software licensesMondayLegal
19Team TrainingNew framework workshopFridayEducation
20Release NotesDocument feature changesThursdayCommunication

Scale Level
Extra Large (125%)

`screen screen--amazon_kindle_2024 screen--scale-large`

[#](https://usetrmnl.com/framework_v2/scale#extra-extra-large-scale-150)

#### Extra Extra Large Scale (150%)

Maximum scale for accessibility needs

Today
1Morning MeetingTeam sync and updates9:00 AM - 9:30 AMDaily
2Code ReviewReview feature branch10:30 AM - 11:30 AMReview
3Lunch BreakTeam lunch at downtown12:30 PM - 1:30 PMBreak
4Client CallWeekly check-in with stakeholders2:00 PM - 3:00 PMClient
5Bug TriagePrioritize reported issues3:30 PM - 4:30 PMBugs
6Documentation UpdateUpdate API documentation4:30 PM - 5:30 PMDocs
7End of Day SyncReview progress and blockers5:30 PM - 6:00 PMSync

Tomorrow
1Sprint PlanningPlan next two weeks10:00 AM - 12:00 PMPlanning
2Client DemoShow new features2:00 PM - 3:00 PMDemo
3Architecture ReviewDiscuss system design4:00 PM - 5:00 PMTechnical
4Stakeholder MeetingProject milestone review9:00 AM - 10:00 AMStakeholder
5QA TestingRegression test suite1:00 PM - 2:00 PMQA
6Design WorkshopUI/UX design session3:00 PM - 4:00 PMDesign
7Technical Debt ReviewAssess code quality issues5:00 PM - 6:00 PMTechnical

This Week
1Security AuditQuarterly security reviewWednesdaySecurity
2Team RetrospectiveSprint reflectionFridayRetrospective
3Performance TestingLoad test new featuresThursdayTesting
4Database OptimizationQuery performance tuningWednesdayDatabase
5Code CleanupRefactor legacy modulesFridayRefactor
6Deployment PrepPrepare release candidateFridayDeploy
7Knowledge TransferOnboard new team memberThursdayTraining
8Sprint ReviewDemo completed workFridayReview
9API DocumentationUpdate endpoint specificationsWednesdayDocumentation
10User TestingConduct usability studiesThursdayUX Research
11Infrastructure ReviewAssess server capacity needsMondayInfrastructure
12Bug PrioritizationTriage reported issuesTuesdayBug Triage
13Feature PlanningRoadmap discussion for Q2ThursdayPlanning
14Third-party IntegrationImplement payment gatewayWednesdayIntegration
15Accessibility AuditWCAG compliance reviewFridayAccessibility
16Monitoring SetupConfigure alerting systemsTuesdayDevOps
17Data MigrationMove legacy customer dataWeekendMigration
18License RenewalUpdate software licensesMondayLegal
19Team TrainingNew framework workshopFridayEducation
20Release NotesDocument feature changesThursdayCommunication

Scale Level
Extra Extra Large (150%)

`screen screen--amazon_kindle_2024 screen--scale-large`

[#](https://usetrmnl.com/framework_v2/scale#how-it-works)

### How It Works

The scale system works by modifying the `screen screen--amazon_kindle_2024 screen--scale-large` CSS variable, which is used throughout the framework to calculate sizes.

[#](https://usetrmnl.com/framework_v2/scale#affected-properties)

#### Affected Properties

When you apply a scale modifier, it scales the following properties:
- Font sizes (all text elements)
- Line heights
- Component dimensions (title bar height, progress bar sizes, etc.)
- Spacing that uses the ui-scale multiplier
- Any custom properties that reference `screen screen--amazon_kindle_2024 screen--scale-large`

**Note:** The scale utility only affects elements that use the `screen screen--amazon_kindle_2024 screen--scale-large` variable in their calculations. Fixed pixel values and screen dimensions remain unchanged.

[#](https://usetrmnl.com/framework_v2/scale#combining-with-device-configurations)

### Combining with Device Configurations

Scale modifiers can be combined with device-specific classes to override the default UI scale for particular devices.

| Class Combination | Description |
| --- | --- |
|
`screen screen--amazon_kindle_2024 screen--scale-large`
|
Uses device default scale
|
|
`screen screen--amazon_kindle_2024 screen--scale-large`
|
Overrides to 87.5% scale
|
|
`screen screen--amazon_kindle_2024 screen--scale-large`
|
Overrides to 112.5% scale
|

`screen screen--amazon_kindle_2024 screen--scale-large`

[Clamp

Manage text overflow with single and multi-line truncation

Previous](/framework_v2/clamp)

[Aspect Ratio

Maintain consistent proportions for elements regardless of their content

Next](/framework_v2/aspect_ratio)

    [Framework Index](/framework_v2)

---

## Aspect Ratio

*Source: https://usetrmnl.com/framework_v2/aspect_ratio*

# Aspect Ratio

      The Aspect Ratio utility uses the native CSS `aspect-ratio` property to maintain consistent proportions for elements.
      Perfect for images, videos, and containers that need to maintain specific width-to-height ratios across different screen sizes.

[#](https://usetrmnl.com/framework_v2/aspect_ratio#common-aspect-ratios)

### Common Aspect Ratios

Use predefined aspect ratio classes to constrain element dimensions to specific proportions.
These utilities apply the CSS `aspect-ratio` property directly to elements.

[#](https://usetrmnl.com/framework_v2/aspect_ratio#auto-aspect-ratio)

#### Auto Aspect Ratio

Use `aspect-ratio` to remove aspect ratio constraints
and let content determine the dimensions naturally.

Auto (no constraints)

Aspect Ratio
Auto

`aspect-ratio`

[#](https://usetrmnl.com/framework_v2/aspect_ratio#square-ratio)

#### Square Ratio

Use `aspect-ratio` for perfect squares.
Ideal for profile pictures, thumbnails, and icon containers.

1:1

1:1

1:1

Aspect Ratio
Square

`aspect-ratio`

[#](https://usetrmnl.com/framework_v2/aspect_ratio#landscape-ratios)

### Landscape Ratios

Common landscape aspect ratios for horizontal content like videos, hero images, and media players.

4:3 (Standard)

3:2 (Classic)

16:9 (Widescreen)

21:9 (Ultra-wide)

Aspect Ratio
Landscape

`aspect-ratio`

[#](https://usetrmnl.com/framework_v2/aspect_ratio#portrait-ratios)

### Portrait Ratios

Portrait aspect ratios for vertical content like mobile screens, story formats, and portrait photography.

3:4

2:3

9:16

9:21

Aspect Ratio
Portrait

`aspect-ratio`

[#](https://usetrmnl.com/framework_v2/aspect_ratio#responsive-aspect-ratios)

### Responsive Aspect Ratios

Aspect ratio utilities support responsive variants, allowing you to change aspect ratios at different breakpoints.
This is useful for adapting content layout across devices.

Responsive Aspect

Aspect Ratio
Responsive

`aspect-ratio`

[#](https://usetrmnl.com/framework_v2/aspect_ratio#working-with-images)

### Working with Images

Aspect ratio utilities use the native CSS `aspect-ratio` property
to constrain element dimensions. Apply these classes directly to images or containers as needed.

Direct on image

Container approach

Square aspect

Aspect Ratio
Image Usage

`aspect-ratio`

[#](https://usetrmnl.com/framework_v2/aspect_ratio#available-aspect-ratios)

## Available Aspect Ratios

Complete reference of all available aspect ratio utilities.

| Class | Ratio | Common Use | Responsive |
| --- | --- | --- | --- |
| aspect--auto | No constraints | Natural dimensions |

✓ Yes

|
| aspect--1/1 | 1:1 | Square images, avatars |

✓ Yes

|
| aspect--4/3 | 4:3 | Standard TV, presentations |

✓ Yes

|
| aspect--3/2 | 3:2 | Classic 35mm photography |

✓ Yes

|
| aspect--16/9 | 16:9 | HD video, YouTube |

✓ Yes

|
| aspect--21/9 | 21:9 | Cinematic, ultra-wide displays |

✓ Yes

|
| aspect--3/4 | 3:4 | Portrait standard |

✓ Yes

|
| aspect--2/3 | 2:3 | Portrait photography |

✓ Yes

|
| aspect--9/16 | 9:16 | Mobile screens, Stories |

✓ Yes

|
| aspect--9/21 | 9:21 | Tall mobile format |

✓ Yes

|

[Scale

Scale interface to affect content density and readability

Previous](/framework_v2/scale)

[Responsive Test

Test responsive utilities and compare SCSS mixins with CSS classes

Next](/framework_v2/responsive_test)

    [Framework Index](/framework_v2)

---

## Responsive Test

*Source: https://usetrmnl.com/framework_v2/responsive_test*
- # Responsive Test

      This page tests responsive utilities by comparing SCSS mixins with CSS classes across different screen conditions.
      Each test row shows an element styled with SCSS mixins alongside the same element styled with CSS utility classes.
      Both columns should look identical when the conditions are met, demonstrating that mixins and classes produce equivalent results.

[#](https://usetrmnl.com/framework_v2/responsive_test#test-overview)

### Test Overview

[#](https://usetrmnl.com/framework_v2/responsive_test#components-tested)

#### Components Tested

• Background (all 7 variants)
- • Visibility (all 7 variants)
- • Text (all 7 variants)
- • Value (all 7 variants)
- • Layout/Flexbox (size + orientation only)

[#](https://usetrmnl.com/framework_v2/responsive_test#variants-tested)

#### Variants Tested

- • Size only (sm:, md:, lg:)
- • Orientation only (portrait:)
- • Bit-depth only (1bit:, 2bit:, 4bit:)
- • Size + Orientation
- • Size + Bit-depth
- • Orientation + Bit-depth
- • All three combined

[#](https://usetrmnl.com/framework_v2/responsive_test#test-coverage)

#### Test Coverage

**6 Components** tested across
**7 Responsive Variants** each

Total: 40 test combinations

[#](https://usetrmnl.com/framework_v2/responsive_test#responsive-utilities-test-results)

### Responsive Utilities Test Results

The following tables test various responsive utility components, comparing SCSS mixin implementations with CSS class implementations.
Each component supports different combinations of size breakpoints, orientation, and bit-depth conditions.

[#](https://usetrmnl.com/framework_v2/responsive_test#background-component)

#### Background Component

|
Test Case
|
SCSS Mixin Result
|
CSS Class Result
|
| --- | --- | --- |
|
md:bg--gray-50
@include screen.screen('md')
Gray bg on md+ screens
|

|

|
|
portrait:bg--gray-50
@include screen.screen('portrait')
Gray bg in portrait
|

|

|
|
2bit:bg--gray-50
@include screen.screen('2bit')
Gray bg on 2-bit screens
|

|

|
|
md:portrait:bg--gray-50
@include screen.screen('md', 'portrait')
Gray bg on md+ portrait
|

|

|
|
md:2bit:bg--gray-50
@include screen.screen('md', '2bit')
Gray bg on md+ 2-bit
|

|

|
|
portrait:2bit:bg--gray-50
@include screen.screen('portrait', '2bit')
Gray bg on portrait 2-bit
|

|

|
|
md:portrait:2bit:bg--gray-50
@include screen.screen('md', 'portrait', '2bit')
Gray bg on md+ portrait 2-bit
|

|

|

[#](https://usetrmnl.com/framework_v2/responsive_test#visibility-component)

#### Visibility Component

|
Test Case
|
SCSS Mixin Result
|
CSS Class Result
|
| --- | --- | --- |
|
sm:hidden
@include screen.screen('sm')
Hidden on sm+ screens
|

|

|
|
portrait:hidden
@include screen.screen('portrait')
Hidden on portrait screens
|

|

|
|
4bit:hidden
@include screen.screen('4bit')
Hidden on 4-bit screens
|

|

|
|
md:portrait:hidden
@include screen.screen('md', 'portrait')
Hidden on md+ portrait screens
|

|

|
|
lg:2bit:hidden
@include screen.screen('lg', '2bit')
Hidden on lg+ 2-bit screens
|

|

|
|
portrait:4bit:hidden
@include screen.screen('portrait', '4bit')
Hidden on portrait 4-bit screens
|

|

|
|
md:portrait:2bit:hidden
@include screen.screen('md', 'portrait', '2bit')
Hidden on md+ portrait 2-bit screens
|

|

|

[#](https://usetrmnl.com/framework_v2/responsive_test#text-component)

#### Text Component

|
Test Case
|
SCSS Mixin Result
|
CSS Class Result
|
| --- | --- | --- |
|
lg:text--center
@include screen.screen('lg')
Centered text on lg+ screens
|

Aa

|

Aa

|
|
portrait:text--center
@include screen.screen('portrait')
Centered text in portrait
|

Aa

|

Aa

|
|
2bit:text--center
@include screen.screen('2bit')
Centered text on 2-bit screens
|

Aa

|

Aa

|
|
md:portrait:text--center
@include screen.screen('md', 'portrait')
Centered on md+ portrait
|

Aa

|

Aa

|
|
lg:4bit:text--center
@include screen.screen('lg', '4bit')
Centered on lg+ 4-bit screens
|

Aa

|

Aa

|
|
portrait:2bit:text--center
@include screen.screen('portrait', '2bit')
Centered on portrait 2-bit screens
|

Aa

|

Aa

|
|
md:portrait:2bit:text--right
@include screen.screen('md', 'portrait', '2bit')
Right-aligned on md+ portrait 2-bit
|

Aa

|

Aa

|

[#](https://usetrmnl.com/framework_v2/responsive_test#value-component)

#### Value Component

|
Test Case
|
SCSS Mixin Result
|
CSS Class Result
|
| --- | --- | --- |
|
md:value--large
@include screen.screen('md')
Large value on md+ screens
|

Aa

|

Aa

|
|
portrait:value--large
@include screen.screen('portrait')
Large value in portrait
|

Aa

|

Aa

|
|
4bit:value--large
@include screen.screen('4bit')
Large value on 4-bit screens
|

Aa

|

Aa

|
|
lg:portrait:value--large
@include screen.screen('lg', 'portrait')
Large value on lg+ portrait
|

Aa

|

Aa

|
|
md:2bit:value--large
@include screen.screen('md', '2bit')
Large value on md+ 2-bit screens
|

Aa

|

Aa

|
|
portrait:4bit:value--large
@include screen.screen('portrait', '4bit')
Large value on portrait 4-bit
|

Aa

|

Aa

|
|
lg:portrait:4bit:value--xlarge
@include screen.screen('lg', 'portrait', '4bit')
XLarge on lg+ portrait 4-bit
|

Aa

|

Aa

|

[#](https://usetrmnl.com/framework_v2/responsive_test#flex-component)

#### Flex Component

|
Test Case
|
SCSS Mixin Result
|
CSS Class Result
|
| --- | --- | --- |
|
md:flex--center
@include screen.screen('md')
Centered on md+ screens
|

|

|
|
portrait:flex--col
@include screen.screen('portrait')
Column layout in portrait
|

|

|
|
lg:portrait:flex--center
@include screen.screen('lg', 'portrait')
Centered on lg+ portrait
|

|

|

[#](https://usetrmnl.com/framework_v2/responsive_test#layout-component)

#### Layout Component

|
Test Case
|
SCSS Mixin Result
|
CSS Class Result
|
| --- | --- | --- |
|
md:layout--col
@include screen.screen('md')
Column layout on md+ screens
|

|

|
|
portrait:layout--bottom
@include screen.screen('portrait')
Center layout in portrait
|

|

|
|
lg:portrait:layout--bottom
@include screen.screen('lg', 'portrait')
Bottom alignment on lg+ portrait
|

|

|

[#](https://usetrmnl.com/framework_v2/responsive_test#component-coverage)

### Component Coverage

#### Components Tested

- • Background (all 7 variants)
- • Visibility (all 7 variants)
- • Text (all 7 variants)
- • Value (all 7 variants)
- • Flex (size + orientation only)
- • Layout (size + orientation only)

#### Variants Tested

- • Size only (sm:, md:, lg:)
- • Orientation only (portrait:)
- • Bit-depth only (1bit:, 2bit:, 4bit:)
- • Size + Orientation
- • Size + Bit-depth
- • Orientation + Bit-depth
- • All three combined

#### Components Not Yet Tested

- • Spacing (p--, m--, etc.)
- • Gap (gap--)
- • Size (w--, h--)
- • Rounded (rounded--)
- • Border (border--)
- • Grid (grid--, col--)
- • Clamp (clamp--)
- • Effects (crisp-edges)
- • Image (image--)

[Aspect Ratio

Maintain consistent proportions for elements regardless of their content

Previous](/framework_v2/aspect_ratio)

[Screen

Device screen dimensions, orientation, and display properties

Next](/framework_v2/screen)

    [Framework Index](/framework_v2)

---

# Base

## Screen

*Source: https://usetrmnl.com/framework_v2/screen*

# Screen

      The Screen component is the outermost container that defines the device dimensions and provides global settings for your content.

[#](https://usetrmnl.com/framework_v2/screen#base-structure)

### Base Structure

The Screen component serves as the root container for all content. It establishes the viewport dimensions,
padding, and provides CSS variables that cascade throughout the framework.

[#](https://usetrmnl.com/framework_v2/screen#default-screen)

#### Default Screen

The base `--color-depth` class creates a container with default dimensions (800x480px landscape).
It includes padding controlled by the `--color-depth` variable.

Default Screen

`--color-depth`

[#](https://usetrmnl.com/framework_v2/screen#orientation)

### Orientation

Screens can be displayed in landscape (default) or portrait orientation. Use the orientation toggle in the navigation bar to preview how your content adapts to different orientations.

[#](https://usetrmnl.com/framework_v2/screen#orientation-toggle)

#### Orientation Toggle

The `--color-depth` modifier swaps the width and height dimensions.
All layout calculations automatically adjust to the new dimensions. Try toggling the orientation using the button in the navigation bar above.

Orientation Demo

Toggle orientation in nav bar

`--color-depth`

[#](https://usetrmnl.com/framework_v2/screen#device-variants)

### Device Variants

The Screen component supports device-specific configurations that adjust dimensions, scaling, and color depth.
These variants ensure content displays correctly across different TRMNL devices.

[#](https://usetrmnl.com/framework_v2/screen#available-devices)

#### Available Devices

Each device variant sets specific dimensions and scaling factors. Combine with orientation and bit-depth modifiers for complete control.
Use the device selector in the navigation bar to switch between devices.

Device Demo

Use device selector in nav bar

`--color-depth`

[#](https://usetrmnl.com/framework_v2/screen#modifiers)

### Modifiers

Screen modifiers provide additional control over display properties and behavior.

[#](https://usetrmnl.com/framework_v2/screen#no-bleed)

#### No Bleed

The `--color-depth` modifier removes default padding,
allowing content to extend to the screen edges. This is useful for full-bleed backgrounds or edge-to-edge layouts.

No Bleed - Content extends to edges

[#](https://usetrmnl.com/framework_v2/screen#dark-mode)

#### Dark Mode

The `--color-depth` modifier inverts the display colors,
with special handling for images to maintain their original appearance. Toggle dark mode using the button in the navigation bar.

Dark Mode Demo

`--color-depth`

[#](https://usetrmnl.com/framework_v2/screen#css-variables)

### CSS Variables

The Screen component provides CSS variables that cascade throughout the framework. These variables automatically
recalculate when device variants or orientation modifiers are applied.

| Variable | Description | Default Value |
| --- | --- | --- |
| `--color-depth` | Screen width | 800px |
| `--color-depth` | Screen height | 480px |
| `--color-depth` | Full width minus padding | calc(--screen-w - --gap * 2) |
| `--color-depth` | Full height minus padding | calc(--screen-h - --gap * 2) |
| `--color-depth` | UI scaling factor | 1 |
| `--color-depth` | Gap scaling factor | 1 |
| `--color-depth` | Display color depth (bits) | 1 |

[Responsive Test

Test responsive utilities and compare SCSS mixins with CSS classes

Previous](/framework_v2/responsive_test)

[View

Show your plugin in different sizes with Mashup view containers

Next](/framework_v2/view)

    [Framework Index](/framework_v2)

---

## View

*Source: https://usetrmnl.com/framework_v2/view*

# View

      The View system provides a consistent container structure for displaying content within the application.

[#](https://usetrmnl.com/framework_v2/view#base-structure)

### Base Structure

The Layout element is the core component of every View, providing a consistent container for your content.
Views can optionally include a Title Bar for additional context.

[#](https://usetrmnl.com/framework_v2/view#view-with-title-bar)

#### View with Title Bar

The `screen--no-bleed` classes create a full-width view.
Also available are `screen--no-bleed`.

When combined with a title bar, it provides context and navigation options.
If you're building a screen in the markup editor, *you do not need to wrap your content*
with the `screen--no-bleed` classes.
The example code below is sufficient for any layout.

Layout

Title
Instance

`screen--no-bleed`

[#](https://usetrmnl.com/framework_v2/view#view-without-title-bar)

#### View without Title Bar

For simpler interfaces, you can create a view without a title bar using just the base view classes.

Layout

`screen--no-bleed`

[#](https://usetrmnl.com/framework_v2/view#screen-container-modifiers)

### Screen Container Modifiers

The screen container that wraps your views has a no-bleed option that removes padding. This can be controlled through Private and Public Plugin settings,
or applied directly in your code when developing locally.

[#](https://usetrmnl.com/framework_v2/view#no-bleed-modifier)

#### No Bleed Modifier

The `screen--no-bleed` modifier removes the default padding around the screen container,
allowing content to extend fully to the edges.

Screen No Bleed / Layout

`screen--no-bleed`

[Screen

Device screen dimensions, orientation, and display properties

Previous](/framework_v2/screen)

[Layout

Primary container for organizing plugin content

Next](/framework_v2/layout)

    [Framework Index](/framework_v2)

---

## Layout

*Source: https://usetrmnl.com/framework_v2/layout*

# Layout

      The Layout system provides flexible containers for organizing content either horizontally or vertically,
      with various alignment options. It uses CSS Flexbox under the hood to create consistent and responsive layouts.

[#](https://usetrmnl.com/framework_v2/layout#base-structure)

### Base Structure

The Layout system provides two fundamental ways to organize content: horizontal and vertical arrangements.
These base structures form the foundation for more complex layouts.

[#](https://usetrmnl.com/framework_v2/layout#row-layout)

#### Row Layout

The `stretch-y` classes create a horizontal layout.
Items are arranged horizontally from left to right, with center alignment as the default positioning.

Item 1

Item 2

Item 3

Layout
Horizontal

`stretch-y`

[#](https://usetrmnl.com/framework_v2/layout#column-layout)

#### Column Layout

The `stretch-y` classes create a vertical layout.
Items are arranged vertically from top to bottom, with center alignment as the default positioning.

Item 1

Item 2

Item 3

Layout
Vertical

`stretch-y`

[#](https://usetrmnl.com/framework_v2/layout#alignment-modifiers)

### Alignment Modifiers

Once you've chosen a base layout structure, you can apply these modifier classes to control how items are aligned
within their container. The system provides both directional alignment (top/bottom/left/right) and centering options.

[#](https://usetrmnl.com/framework_v2/layout#horizontal-alignment)

#### Horizontal Alignment

Use `stretch-y`,
`stretch-y`, or
`stretch-y` to control horizontal alignment.

Left

Layout
Left Alignment

`stretch-y`

[#](https://usetrmnl.com/framework_v2/layout#vertical-alignment)

#### Vertical Alignment

Use `stretch-y`,
`stretch-y`, or
`stretch-y` to control vertical alignment.

Top

Layout
Top Alignment

`stretch-y`

[#](https://usetrmnl.com/framework_v2/layout#center-alignment)

#### Center Alignment

Use `stretch-y` to center items both horizontally and vertically,
or use `stretch-y` and
`stretch-y` for individual axis control.

Center

Layout
Center Alignment

`stretch-y`

[#](https://usetrmnl.com/framework_v2/layout#stretch-modifiers)

### Stretch Modifiers

Stretch modifiers allow you to control how child elements fill the available space within a layout.
You can apply these modifiers either to the layout container or to individual child elements.

[#](https://usetrmnl.com/framework_v2/layout#container-stretch)

#### Container Stretch

Use `stretch-y` to make all children stretch in both directions.
You can also use `stretch-y` and
`stretch-y` for individual axis control.
These modifiers work with both row and column layouts.

[#](https://usetrmnl.com/framework_v2/layout#row-layout-stretch)

#### Row Layout Stretch

Examples of stretch behavior in row layouts. Use `stretch-y` for both directions,
`stretch-y` for horizontal, or
`stretch-y` for vertical stretch.

Item 1

Item 2

Item 3

Row Layout
Full Stretch

`stretch-y`

Item 1

Item 2

Item 3

Row Layout
Horizontal Stretch

`stretch-y`

Item 1

Item 2

Item 3

Row Layout
Vertical Stretch

`stretch-y`

[#](https://usetrmnl.com/framework_v2/layout#column-layout-stretch)

#### Column Layout Stretch

Examples of stretch behavior in column layouts. The same modifiers work consistently regardless of layout direction.

Item 1

Item 2

Item 3

Column Layout
Full Stretch

`stretch-y`

Item 1

Item 2

Item 3

Column Layout
Horizontal Stretch

`stretch-y`

Item 1

Item 2

Item 3

Column Layout
Vertical Stretch

`stretch-y`

[#](https://usetrmnl.com/framework_v2/layout#child-element-stretch)

#### Child Element Stretch

Use `stretch-y` and
`stretch-y` classes on individual elements to control their stretch behavior
within row or column layouts.

Item 1

Item 2 (stretched)

Item 3

Layout
Row + Individual Stretch

`stretch-y`

Item 1

Item 2 (stretched)

Item 3

Layout
Column + Individual Stretch

`stretch-y`

[View

Show your plugin in different sizes with Mashup view containers

Previous](/framework_v2/view)

[Title Bar

Standardized title bar with plugin information and instance details

Next](/framework_v2/title_bar)

    [Framework Index](/framework_v2)

---

## Title Bar

*Source: https://usetrmnl.com/framework_v2/title_bar*

# Title Bar

      The Title Bar component provides a consistent header for terminal-like interfaces, displaying application information
      such as icons, titles, and instance details.

[#](https://usetrmnl.com/framework_v2/title_bar#base-structure)

### Base Structure

The Title Bar consists of three main elements: an icon, a title, and an optional instance label. These elements
are arranged horizontally and automatically spaced.

[#](https://usetrmnl.com/framework_v2/title_bar#basic-title-bar)

#### Basic Title Bar

The basic Title Bar includes an icon and title. Use the `instance` class
for the container.

Basic Title Bar

`instance`

[#](https://usetrmnl.com/framework_v2/title_bar#title-bar-with-instance)

#### Title Bar with Instance

Add an instance label using the `instance` class
to display additional context.

Title Bar with Instance
Production

`instance`

[Layout

Primary container for organizing plugin content

Previous](/framework_v2/layout)

[Columns

Implement zero-config column layouts for content organization

Next](/framework_v2/columns)

    [Framework Index](/framework_v2)

---

## Columns

*Source: https://usetrmnl.com/framework_v2/columns*

# Columns

      The Columns system provides a simple way to create balanced column layouts that look great on the device. For more complex layouts, check out our [Grid system](/framework_v2/grid). You can use both systems together - the Columns system for your overall layout, and the Grid system within columns when you need more layout control - or use either system independently.

[#](https://usetrmnl.com/framework_v2/columns#basic-column-layout)

### Basic Column Layout

The basic column layout is flexible - you can add as many columns as needed depending on your content needs.

Column 1
Item
Item
Item
Item

Column 2
Item
Item

Column 3
Item

Columns

```
<div class="columns">
  <div class="column">
    {{ Content for column 1 }}
  </div>
  <div class="column">
    {{ Content for column 2 }}
  </div>
  <div class="column">
    {{ Content for column 3 }}
  </div>
</div>
```

        [Title Bar

Standardized title bar with plugin information and instance details

            Previous](/framework_v2/title_bar)

        [Mashup

Assemble multiple plugin views into a single interface

            Next](/framework_v2/mashup)

    [Framework Index](/framework_v2)

---

## Mashup

*Source: https://usetrmnl.com/framework_v2/mashup*

# Mashup

      The Mashup system provides grid‑based containers for assembling multiple plugin views within a single interface.

          [#](https://usetrmnl.com/framework_v2/mashup#mashup-layouts)

### Mashup Layouts

            Each mashup layout provides a specific arrangement of plugin views. By applying modifier classes, you can position plugins in various configurations.

            [#](https://usetrmnl.com/framework_v2/mashup#1-left-1-right)

#### 1 Left, 1 Right

              In the 1Lx1R layout, the first plugin occupies the left column while the second occupies the right column.

                        Plugin A

                        Plugin B

	```
<div class="mashup mashup--2x2">
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin A</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin B</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin C</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin D</span>
    </div>
  </div>
</div>
```

[#](https://usetrmnl.com/framework_v2/mashup#1-top-1-bottom)

#### 1 Top, 1 Bottom

In the 1Tx1B layout, one plugin spans the top row while the other occupies the bottom row.

Plugin A

Plugin B

```
<div class="mashup mashup--2x2">
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin A</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin B</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin C</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin D</span>
    </div>
  </div>
</div>
```

            [#](https://usetrmnl.com/framework_v2/mashup#1-left-2-right)

#### 1 Left, 2 Right

              In the 1Lx2R layout, one plugin occupies the left column while two plugins stack in the right column.

                        Plugin A

                        Plugin B

                        Plugin C

	```
<div class="mashup mashup--2x2">
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin A</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin B</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin C</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin D</span>
    </div>
  </div>
</div>
```

[#](https://usetrmnl.com/framework_v2/mashup#2-left-1-right)

#### 2 Left, 1 Right

The 2Lx1R layout stacks two plugins in the left column, with a single plugin in the right column.

Plugin A

Plugin B

Plugin C

```
<div class="mashup mashup--2x2">
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin A</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin B</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin C</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin D</span>
    </div>
  </div>
</div>
```

            [#](https://usetrmnl.com/framework_v2/mashup#2-top-1-bottom)

#### 2 Top, 1 Bottom

              In the 2Tx1B layout, two plugins are presented side by side in the top row, with a single plugin in the bottom row.

                        Plugin A

                        Plugin B

                        Plugin C

	```
<div class="mashup mashup--2x2">
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin A</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin B</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin C</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin D</span>
    </div>
  </div>
</div>
```

[#](https://usetrmnl.com/framework_v2/mashup#1-top-2-bottom)

#### 1 Top, 2 Bottom

The 1Tx2B layout places one plugin in the top row, with two plugins side by side in the bottom row.

Plugin A

Plugin B

Plugin C

```
<div class="mashup mashup--2x2">
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin A</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin B</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin C</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin D</span>
    </div>
  </div>
</div>
```

            [#](https://usetrmnl.com/framework_v2/mashup#2-x-2-grid)

#### 2 x 2 Grid

              The 2x2 grid arranges four plugins in a grid pattern.

                        Plugin A

                        Plugin B

                        Plugin C

                        Plugin D

	```
<div class="mashup mashup--2x2">
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin A</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin B</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin C</span>
    </div>
  </div>
  <div class="view view--quadrant">
    <div class="layout">
      <span class="label">Plugin D</span>
    </div>
  </div>
</div>
```

[Columns

Implement zero-config column layouts for content organization

Previous](/framework_v2/columns)

[Title

Style headings with consistent typography

Next](/framework_v2/title)

    [Framework Index](/framework_v2)

---

# Elements

## Title

*Source: https://usetrmnl.com/framework_v2/title*

# Title

      The Title system provides consistent text headings with different size variants.
      It helps maintain visual hierarchy and readability throughout the interface.

[#](https://usetrmnl.com/framework_v2/title#base-structure)

### Base Structure

The Title system offers two primary variations: default and small.
These base structures form the foundation for content headings.

[#](https://usetrmnl.com/framework_v2/title#default-title)

#### Default Title

The `title--small` class creates a standard-sized heading.
This is the most common usage for primary content headers.

Default Title

Title
Default

`title--small`

[#](https://usetrmnl.com/framework_v2/title#small-title)

#### Small Title

Add `title--small` to create a more compact heading.
Useful for secondary headers or where space is limited.

Small Title

Title
Small

`title--small`

[Mashup

Assemble multiple plugin views into a single interface

Previous](/framework_v2/mashup)

[Value

Display data values with consistent formatting

Next](/framework_v2/value)

    [Framework Index](/framework_v2)

---

## Value

*Source: https://usetrmnl.com/framework_v2/value*

# Value

      The Value system provides consistent text styling for displaying numerical and textual values, with various size options
      and support for tabular numbers. It ensures readability and visual hierarchy across different contexts.

[#](https://usetrmnl.com/framework_v2/value#size-variants)

### Size Variants

The Value system offers eight size variants, from XXSmall to XXXLarge, allowing for flexible typography scaling
across different use cases. Each size is carefully crafted for optimal readability and visual balance.

[#](https://usetrmnl.com/framework_v2/value#xxsmall)

#### XXSmall

The `md:4bit:value--large` class creates the smallest text size,
ideal for compact displays and supporting information.

Example
48,206.62

Value
XXSmall

`md:4bit:value--large`

[#](https://usetrmnl.com/framework_v2/value#xsmall)

#### XSmall

The `md:4bit:value--large` class provides a size slightly larger than XXSmall,
suitable for secondary information and compact interfaces.

Example
48,206.62

Value
XSmall

`md:4bit:value--large`

[#](https://usetrmnl.com/framework_v2/value#small)

#### Small

The `md:4bit:value--large` class creates a size suitable
for general body text and regular content.

Example
48,206.62

Value
Small

`md:4bit:value--large`

[#](https://usetrmnl.com/framework_v2/value#default-size)

#### Default Size

The base `md:4bit:value--large` class without size modifiers
provides the standard display size.

Example
48,206.62

Value
Default

`md:4bit:value--large`

[#](https://usetrmnl.com/framework_v2/value#large)

#### Large

The `md:4bit:value--large` class creates emphasized text,
suitable for important information and headings.

Example
48,206.62

Value
Large

`md:4bit:value--large`

[#](https://usetrmnl.com/framework_v2/value#xlarge)

#### XLarge

The `md:4bit:value--large` class provides prominent display
text, ideal for section headers and key metrics.

Example
48,206.62

Value
XLarge

`md:4bit:value--large`

[#](https://usetrmnl.com/framework_v2/value#xxlarge)

#### XXLarge

The `md:4bit:value--large` class creates very large display
text, perfect for major headings and hero sections.

Example
48,206.62

Value
XXLarge

`md:4bit:value--large`

[#](https://usetrmnl.com/framework_v2/value#xxxlarge)

#### XXXLarge

The `md:4bit:value--large` class provides the largest
text size, designed for maximum impact in hero sections and key displays.

Example
48,206.62

Value
XXXLarge

`md:4bit:value--large`

[#](https://usetrmnl.com/framework_v2/value#numerical-display)

### Numerical Display

For numerical values, the Value system includes special formatting options to ensure clear and consistent display
of numbers, particularly in financial or data-heavy contexts.

[#](https://usetrmnl.com/framework_v2/value#tabular-numbers)

#### Tabular Numbers

Add the `md:4bit:value--large` modifier to enable
tabular numbers, ensuring consistent width for better alignment in tables and lists.

Regular: 48,206.62
Tabular: 48,206.62

Value
Tabular Numbers

`md:4bit:value--large`

[#](https://usetrmnl.com/framework_v2/value#responsive-values)

### Responsive Values

The Value system supports responsive variants using breakpoint prefixes. This allows values to adapt their size
based on the device width, ensuring optimal readability across different screen sizes.

[#](https://usetrmnl.com/framework_v2/value#breakpoint-prefixes)

#### Breakpoint Prefixes

Use breakpoint prefixes like `md:4bit:value--large`,
`md:4bit:value--large`, `md:4bit:value--large`
to apply different sizes at different screen widths.

Responsive Value
1,234.56

Value
Responsive

`md:4bit:value--large`

[#](https://usetrmnl.com/framework_v2/value#combined-with-bit-depth)

#### Combined with Bit-depth

You can combine responsive and bit-depth variants for precise control. Use the standard pattern:
`md:4bit:value--large` (breakpoint first, then bit-depth).

Combined Variants
42,000.00

Value
Combined

`md:4bit:value--large`

[Title

Style headings with consistent typography

Previous](/framework_v2/title)

[Label

Create clear labels for unified content identification

Next](/framework_v2/label)

    [Framework Index](/framework_v2)

---

## Label

*Source: https://usetrmnl.com/framework_v2/label*

# Label

      The Label system provides various styles for displaying text labels, with options for different visual treatments
      and sizes. Labels can be used to highlight text, show status, or create visual hierarchy in your interface.

[#](https://usetrmnl.com/framework_v2/label#label-variants)

### Label Variants

Labels come in several variants to suit different use cases. Each variant provides a distinct visual style
while maintaining consistent spacing and sizing.

[#](https://usetrmnl.com/framework_v2/label#default-labels)

#### Default Labels

The base label styles and their variants provide different ways to present text, from solid backgrounds
to outlined and underlined versions.

Label
Outline Label
Underline Label
Gray Out Label
Inverted Label

Label
Default

`label--small`

[#](https://usetrmnl.com/framework_v2/label#small-labels)

#### Small Labels

Add the `label--small` class
to create a more compact version of any label variant.

Label
Outline Label
Underline Label
Gray Out Label
Inverted Label

Label
Small

`label--small`

[Value

Display data values with consistent formatting

Previous](/framework_v2/value)

[Description

Format descriptive text with standardized styles

Next](/framework_v2/description)

    [Framework Index](/framework_v2)

---

## Description

*Source: https://usetrmnl.com/framework_v2/description*

# Description

      The Description component provides a standardized way to display descriptive text content with consistent styling.

[#](https://usetrmnl.com/framework_v2/description#basic-usage)

### Basic Usage

Use the `description` class to style your descriptive text.

This is a sample description text that demonstrates how the Description component renders content.

Description

`description`

[Label

Create clear labels for unified content identification

Previous](/framework_v2/label)

[Divider

Create horizontal or vertical dividers between elements

Next](/framework_v2/divider)

    [Framework Index](/framework_v2)

---

## Divider

*Source: https://usetrmnl.com/framework_v2/divider*

# Divider

      The Divider element provides a simple, standalone way to create visual separations in your layouts.
      Dividers automatically adapt to their background color for optimal visibility across four background types: white, light, dark, and black.

[#](https://usetrmnl.com/framework_v2/divider#usage)

### Usage

Use `divider--on-black` or `divider--on-black` for horizontal dividers,
and `divider--on-black` for vertical dividers.
Dividers automatically detect their background and adjust their appearance for optimal contrast.

[#](https://usetrmnl.com/framework_v2/divider#automatic-background-detection)

#### Automatic Background Detection

By default, dividers automatically detect whether they're on a white, light, dark, or black background and adjust their appearance accordingly.
The system categorizes backgrounds into four types for optimal contrast:
- **White:** Very light backgrounds (gray-70 to gray-75 and pure white)
- **Light:** Light gray backgrounds (gray-50 to gray-65)
- **Dark:** Dark gray backgrounds (gray-30 to gray-45)
- **Black:** Very dark backgrounds (gray-10 to gray-25 and pure black)

White Background

Divider uses darkest style (level 7)

Light Background (gray-70)

Divider uses dark style (level 6)

Dark Background (gray-30)

Divider uses light style (level 3)

Black Background

Divider uses lightest style (level 1)

Auto Background Detection

`divider--on-black`

[#](https://usetrmnl.com/framework_v2/divider#manual-background-control)

#### Manual Background Control

You can manually specify the background type using `divider--on-black`,
`divider--on-black`,
`divider--on-black`, or
`divider--on-black` classes when automatic detection isn't suitable.

All variants on white

on-white (optimal)

on-light

on-dark

on-black (poor contrast)

All variants on black

on-white (poor contrast)

on-light

on-dark

on-black (optimal)

Manual Background Control

`divider--on-black`

[#](https://usetrmnl.com/framework_v2/divider#vertical-dividers)

#### Vertical Dividers

Vertical dividers work the same way as horizontal dividers, with automatic background detection for all four background types.

Left Side
White background

Right Side
Auto-detected

Left Side
Black background

Right Side
Auto-detected

Vertical Dividers

`divider--on-black`

[#](https://usetrmnl.com/framework_v2/divider#common-usage-patterns)

#### Common Usage Patterns

$1,234
Revenue

Orders

$29.38
AOV

Section Separation

`divider--on-black`

[Description

Format descriptive text with standardized styles

Previous](/framework_v2/description)

[Rich Text

Display formatted paragraphs with alignment and size variants

Next](/framework_v2/rich_text)

    [Framework Index](/framework_v2)

---

# Components

## Rich Text

*Source: https://usetrmnl.com/framework_v2/rich_text*

# Rich Text

      The Rich Text component provides a flexible container for displaying text content with consistent styling and layout options.
      It's commonly used for paragraphs, articles, and other formatted text content that needs to maintain readability and visual hierarchy.

[#](https://usetrmnl.com/framework_v2/rich_text#understanding-richtext-components)

### Understanding Richtext Components

The richtext system consists of two key parts working together: the parent `data-pixel-perfect="true"` container and its natural child `data-pixel-perfect="true"` component.

The parent `data-pixel-perfect="true"` container is designed for flexibility and can hold any content. It controls the overall placement and spacing of the component within your layout.

The `data-pixel-perfect="true"` component is where your actual text content lives. It provides additional styling and formatting options specific to text.

Both components have separate alignment modifiers that serve different purposes:
- `data-pixel-perfect="true"`: Controls how the richtext container is positioned within its parent
- `data-pixel-perfect="true"`: Controls how the content component is positioned within the richtext container
- `data-pixel-perfect="true"`: Controls the actual text alignment within the content component

This multi-level alignment system provides maximum flexibility for positioning both the component and its content independently.

[#](https://usetrmnl.com/framework_v2/rich_text#rich-text-alignment)

### Rich Text Alignment

The Rich Text component can be aligned in three different ways: left, center, or right.
Each alignment option provides different text positioning to suit various design needs.

[#](https://usetrmnl.com/framework_v2/rich_text#left-aligned)

#### Left Aligned

Left alignment is the default and most readable format for longer text content, ideal for paragraphs and articles.

This is an example of left-aligned rich text content. This alignment is generally best for readability with longer paragraphs of text.

Multiple paragraphs will maintain the same alignment, making it easy to read through longer content while maintaining visual consistency.

Rich Text
Left Aligned

`data-pixel-perfect="true"`

[#](https://usetrmnl.com/framework_v2/rich_text#center-aligned)

#### Center Aligned

Center alignment is ideal for headings, quotes, or shorter text that needs to be highlighted or visually balanced within the layout.

This is an example of center-aligned rich text content.

Centered text works well for quotes, headings, or highlighted information that needs visual emphasis.

Rich Text
Center Aligned

`data-pixel-perfect="true"`

[#](https://usetrmnl.com/framework_v2/rich_text#right-aligned)

#### Right Aligned

Right alignment is less common but can be useful for specific design scenarios or to create visual tension in layouts.

This is an example of right-aligned rich text content.

Right alignment can be used for captions, sidebars, or to create visual interest through contrasting alignments.

Rich Text
Right Aligned

`data-pixel-perfect="true"`

[#](https://usetrmnl.com/framework_v2/rich_text#content-size-variants)

### Content Size Variants

The Rich Text component offers different content size variants to accommodate various text hierarchies and emphasis needs.

This is large size rich text content.
Perfect for headings and emphasis.

This is the default size for rich text content.
Optimized for readability and general use.

This is small size rich text content.
Ideal for captions and secondary information.

Rich Text
Size Variants

`data-pixel-perfect="true"`

[#](https://usetrmnl.com/framework_v2/rich_text#controlling-width)

### Controlling Width

By default, the Rich Text content takes up as much space as it needs and is centered in the layout, expanding up to a maximum width.
However, you can precisely control the width of content using Size utility classes.

Control exact width and height dimensions with size utilities

[View Size Documentation](/framework_v2/size)

This Rich Text content has a fixed width of 240 pixels using utility classes.

Notice how the text is constrained to this specific width regardless of the container size.

Rich Text
Fixed Width: 240px

`data-pixel-perfect="true"`

You can use any of the Size system's fixed sizes (`data-pixel-perfect="true"`, `data-pixel-perfect="true"`, etc.),
arbitrary sizes (`data-pixel-perfect="true"`), or responsive sizes (`data-pixel-perfect="true"`, `data-pixel-perfect="true"`).
This flexibility lets you create perfectly sized text blocks for any layout need.

[#](https://usetrmnl.com/framework_v2/rich_text#integration-with-content-limiter)

### Integration with Content Limiter

The Rich Text component works seamlessly with the Content Limiter utility to handle overflowing text. When combined,
it automatically adjusts text size to fit the available space, which is particularly useful in constrained layouts.

Simply add the `data-pixel-perfect="true"` attribute to your richtext content element. You can also specify a custom maximum height using the `data-pixel-perfect="true"` attribute (e.g., `data-pixel-perfect="true"`).

In mashups, Content Limiter automatically applies different default height thresholds based on the view type (400px for full and half_vertical views, 160px for quadrant and half_horizontal views). For custom or complex layouts that don't use standard view components, you'll need to manually specify an appropriate `data-pixel-perfect="true"` value to ensure proper content scaling.

Automatically resize text when content exceeds height limits

[View Content Limiter Documentation](/framework_v2/content_limiter)

The Rich Text component with Content Limiter will automatically adjust text size when content exceeds the height threshold for the current view. This is particularly useful for views with limited vertical space such as quadrants or half-horizontal layouts.

Notice how this text is rendered smaller to fit within the quadrant view. Without Content Limiter, this text would overflow the container.

Rich Text
With Content Limiter

`data-pixel-perfect="true"`

[#](https://usetrmnl.com/framework_v2/rich_text#integration-with-pixel-perfect)

### Integration with Pixel Perfect

For optimal text rendering on e-ink displays, the Rich Text component can be enhanced with the Pixel Perfect utility.
This ensures text is rendered with crisp edges by aligning precisely to the pixel grid, preventing blurry or inconsistent text weight.

Simply add the `data-pixel-perfect="true"` attribute to your richtext content element.

Ensure crisp text rendering on 1-bit displays

[View Pixel Perfect Documentation](/framework_v2/pixel_perfect)

This text is rendered with pixel perfect alignment, ensuring that each character aligns precisely with the pixel grid. Notice how the text appears crisp and clear with consistent weight.

Pixel Perfect is especially important for e-ink displays that use a 1-bit color space (just black and white), where anti-aliased gray pixels are forced to become either fully black or fully white.

Rich Text
With Pixel Perfect

`data-pixel-perfect="true"`

[Divider

Create horizontal or vertical dividers between elements

Previous](/framework_v2/divider)

[Item

Build standardized list items and content blocks

Next](/framework_v2/item)

    [Framework Index](/framework_v2)

---

## Item

*Source: https://usetrmnl.com/framework_v2/item*

# Item

      The Item component provides a flexible container for displaying content with optional metadata and indexing.
      It's commonly used for lists, schedules, and other content that needs consistent formatting.

[#](https://usetrmnl.com/framework_v2/item#item-variants)

### Item Variants

Items can be displayed in four variants: with meta and index, with meta only, with meta emphasis levels, or in a simple format.
Each variant provides different levels of visual hierarchy and information density.

[#](https://usetrmnl.com/framework_v2/item#with-meta)

#### With Meta

This variant includes a meta section without an index, providing space for optional metadata while maintaining a clean appearance.

Team Meeting
Weekly team sync-up

9:00 AM - 10:00 AM
Confirmed

Client Presentation
Quarterly review with XYZ Corp

2:00 PM - 3:30 PM
Tentative

Project Deadline
Submit final deliverables for Project Alpha

11:59 PM
Important

Code Review
Review pull requests for Project Beta

3:30 PM - 4:30 PM
High Priority

Team Meeting
Weekly team sync-up

9:00 AM - 10:00 AM
Confirmed

Client Presentation
Quarterly review with XYZ Corp

2:00 PM - 3:30 PM
Tentative

Project Deadline
Submit final deliverables for Project Alpha

11:59 PM
Important

Item
With Meta

`item--emphasis-3`

[#](https://usetrmnl.com/framework_v2/item#with-meta-emphasis)

#### With Meta Emphasis

Apply `item--emphasis-3`, `item--emphasis-3` or `item--emphasis-3` to progressively darken the meta bar and draw attention. Level&nbsp;1 is the default styling.

Team Meeting
Weekly team sync-up

9:00 AM - 10:00 AM
Confirmed

Client Presentation
Quarterly review with XYZ Corp

2:00 PM - 3:30 PM
Tentative

Project Deadline
Submit final deliverables for Project Alpha

11:59 PM
Important

Code Review
Review pull requests for Project Beta

3:30 PM - 4:30 PM
High Priority

Team Meeting
Weekly team sync-up

9:00 AM - 10:00 AM
Confirmed

Client Presentation
Quarterly review with XYZ Corp

2:00 PM - 3:30 PM
Tentative

Project Deadline
Submit final deliverables for Project Alpha

11:59 PM
Important

Item
Emphasis Levels

`item--emphasis-3`

[#](https://usetrmnl.com/framework_v2/item#with-meta-and-index)

#### With Meta and Index

The most detailed variant includes both a meta section and an index number, useful for ordered lists or when additional context is needed.

Team Meeting
Weekly team sync-up

9:00 AM - 10:00 AM
Confirmed

Client Presentation
Quarterly review with XYZ Corp

2:00 PM - 3:30 PM
Tentative

Project Deadline
Submit final deliverables for Project Alpha

11:59 PM
Important

Code Review
Review pull requests for Project Beta

3:30 PM - 4:30 PM
High Priority

Team Meeting
Weekly team sync-up

9:00 AM - 10:00 AM
Confirmed

Client Presentation
Quarterly review with XYZ Corp

2:00 PM - 3:30 PM
Tentative

Project Deadline
Submit final deliverables for Project Alpha

11:59 PM
Important

Item
With Meta and Index

`item--emphasis-3`

[#](https://usetrmnl.com/framework_v2/item#simple)

#### Simple

The simplest variant focuses purely on content, ideal for basic lists or when metadata isn't needed.

Team Meeting
Weekly team sync-up

9:00 AM - 10:00 AM
Confirmed

Client Presentation
Quarterly review with XYZ Corp

2:00 PM - 3:30 PM
Tentative

Project Deadline
Submit final deliverables for Project Alpha

11:59 PM
Important

Code Review
Review pull requests for Project Beta

3:30 PM - 4:30 PM
High Priority

Team Meeting
Weekly team sync-up

9:00 AM - 10:00 AM
Confirmed

Client Presentation
Quarterly review with XYZ Corp

2:00 PM - 3:30 PM
Tentative

Project Deadline
Submit final deliverables for Project Alpha

11:59 PM
Important

Item
Simple

`item--emphasis-3`

[Rich Text

Display formatted paragraphs with alignment and size variants

Previous](/framework_v2/rich_text)

[Table

Create data tables optimized for 1-bit rendering

Next](/framework_v2/table)

    [Framework Index](/framework_v2)

---

## Table

*Source: https://usetrmnl.com/framework_v2/table*

# Table

      The Table system provides structured data presentation with consistent styling and various size options.
      It's designed to display information in a clear, scannable format while maintaining visual hierarchy.

[#](https://usetrmnl.com/framework_v2/table#base-structure)

### Base Structure

Tables are built using standard HTML table elements with additional classes for styling.
The base structure includes headers and data cells with consistent spacing and typography.

[#](https://usetrmnl.com/framework_v2/table#default-table)

#### Default Table

The `table--condensed` class provides
the standard table styling with comfortable spacing and clear visual hierarchy.

| Header 1 | Header 2 | Header 3 |
| --- | --- | --- |
| Row 1, Cell 1 | Row 1, Cell 2 | Row 1, Cell 3 |
| Row 2, Cell 1 | Row 2, Cell 2 | Row 2, Cell 3 |
| Row 3, Cell 1 | Row 3, Cell 2 | Row 3, Cell 3 |

Table
Default

`table--condensed`

[#](https://usetrmnl.com/framework_v2/table#size-variants)

### Size Variants

Tables can be rendered in different sizes to accommodate various use cases and space constraints.
Size variants maintain the same structure while adjusting spacing and typography.

[#](https://usetrmnl.com/framework_v2/table#condensed-table)

#### Condensed Table

Add `table--condensed` for a more
compact table with reduced padding and smaller text.

| Header 1 | Header 2 | Header 3 |
| --- | --- | --- |
| Row 1, Cell 1 | Row 1, Cell 2 | Row 1, Cell 3 |
| Row 2, Cell 1 | Row 2, Cell 2 | Row 2, Cell 3 |
| Row 3, Cell 1 | Row 3, Cell 2 | Row 3, Cell 3 |

Table
Condensed

`table--condensed`

[Item

Build standardized list items and content blocks

Previous](/framework_v2/item)

[Chart

Visualize data optimized for 1-bit rendering

Next](/framework_v2/chart)

    [Framework Index](/framework_v2)

---

## Chart

*Source: https://usetrmnl.com/framework_v2/chart*

# Chart

      With careful, minimal styling choices, TRMNL can display a variety of numerical or time centric content as charts and graphs.

[#](https://usetrmnl.com/framework_v2/chart#usage)

### Usage

Any CDN-enabled JavaScript library may be used to develop charting interfaces,
however the examples below leverage [Highcharts](https://highcharts.com)
and [Chartkick](https://chartkick.com).

Take care to disable animation effects, otherwise your chart may be only partially captured by TRMNL's screenshot rendering service.

[#](https://usetrmnl.com/framework_v2/chart#line-chart)

#### Line Chart

Line charts effectively display trends over time. This example shows a simple line chart with customized styling to match the TRMNL aesthetic.

25,388
Pageviews

4,771
Visitors

2.23
Mins on Page

Charts
Line Chart

```
<!-- import Highcharts libraries -->
  <script src="https://usetrmnl.com/js/highcharts/12.3.0/highcharts.js"></script>
  <script src="https://usetrmnl.com/js/highcharts/12.3.0/highcharts-more.js"></script>
  <script src="https://usetrmnl.com/js/highcharts/12.3.0/pattern-fill.js"></script>
  <div class="view view--full">
    <div class="layout layout--col gap--none">
      <div class="grid grid--cols-7 mb--5">
<div class="h--32">
<div id="day_0" class="h--24"></div>
<span class="description text--center">Monday</span>
</div>
<div class="h--32">
<div id="day_1" class="h--24"></div>
<span class="description text--center">Tuesday</span>
</div>
<div class="h--32">
<div id="day_2" class="h--24"></div>
<span class="description text--center">Wednesday</span>
</div>
<div class="h--32">
<div id="day_3" class="h--24"></div>
<span class="description text--center">Thursday</span>
</div>
<div class="h--32">
<div id="day_4" class="h--24"></div>
<span class="description text--center">Friday</span>
</div>
<div class="h--32">
<div id="day_5" class="h--24"></div>
<span class="description text--center">Saturday</span>
</div>
<div class="h--32">
<div id="day_6" class="h--24"></div>
<span class="description text--center">Sunday</span>
</div>
      </div>
      <div class="w-full b-h-gray-5"></div>
      <div class="grid">
<div class="col--span-1 col--center">
<div id="day_all" class="w-[340px] mt--5"></div>
</div>
<div class="col--span-1 gap--large">
<div class="flex flex--col gap--medium w--full flex--center">
<div class="grid grid--cols-2">
<div class="item">
<div class="meta"></div>
<div class="content">
<span class="value value--tnums">18%</span>
<span class="label">REM Sleep</span>
</div>
</div>
<div class="item">
<div class="meta"></div>
<div class="content">
<span class="value value--tnums">23%</span>
<span class="label">Deep Sleep</span>
</div>
</div>
</div>
<div class="b-h-gray-5 w-full"></div>
<div class="grid grid--cols-2">
<div class="item">
<div class="meta"></div>
<div class="content">
<span class="value value--small value--tnums">12m</span>
<span class="label">Time to Sleep</span>
</div>
</div>
<div class="item">
<div class="meta"></div>
<div class="content">
<span class="value value--small value--tnums">7h 32min</span>
<span class="label">Sleep Duration</span>
</div>
</div>
</div>
<div class="b-h-gray-5 w-full"></div>
<div class="grid grid--cols-2">
<div class="item">
<div class="meta"></div>
<div class="content">
<span class="value value--small value--tnums">8</span>
<span class="label">Toss & Turns</span>
</div>
</div>
<div class="item">
<div class="meta"></div>
<div class="content">
<span class="value value--small value--tnums">0.5%</span>
<span class="label">Snoring</span>
</div>
</div>
</div>
</div>
</div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    var dailyScores = [92, 95, 81, 56, 81, 72, 85];
    var weeklyScore = 82;
    function createGauge(score, day, opts) {
    opts | | = {
    title: null,
    height: "80%",
    labels: {
    distance: 15,
    style: {
    fontSize: "16px"
    }
    },
    series: {
    fontSize: "3em"
    },
    yAxis: {
    title: textRating(score)
    }
    };
    Highcharts.chart(`day_${day}`, {
    chart: {
    type: "gauge",
    height: opts.height,
    animation: false
    },
    title: {
    text: opts.title
    },
    pane: {
    startAngle: -150,
    endAngle: 150,
    background: {
    backgroundColor: "transparent",
    borderWidth: 0
    }
    },
    plotOptions: {
    gauge: {
    animation: false,
    pivot: {
    backgroundColor: "transparent"
    },
    dial: {
    backgroundColor: "transparent",
    baseWidth: 0,
    },
    }
    },
    yAxis: {
    min: 0,
    max: 100,
    minorTickInterval: 0,
    tickColor: "#ffffff",
    tickLength: 40,
    tickPixelInterval: 40,
    tickWidth: 0,
    lineWidth: 0,
    title: {
    text: opts.yAxis.title,
    style: {
    color: "#000000",
    fontFamily: "NicoPups",
    fontSize: "16px"
    }
    },
    labels: {
    ...opts.labels,
    style: {
    fontSize: "16px"
    }
    },
    plotBands: [{
    from: 1,
    to: score,
    color: {
    pattern: {
    image: "https://usetrmnl.com/images/grayscale/gray-2.png",
    width: 12,
    height: 12
    }
    },
    innerRadius: "82%",
    borderRadius: "50%"
    }, {
    from: score + 1,
    to: 100,
    color: {
    pattern: {
    image: "https://usetrmnl.com/images/grayscale/gray-5.png",
    width: 12,
    height: 12
    }
    },
    innerRadius: "82%",
    borderRadius: "50%",
    }]
    },
    series: [{
    name: "Score",
    data: [score],
    dataLabels: {
    borderWidth: 0,
    style: {
    fontSize: opts.series.fontSize,
    fontWeight: opts.series.fontWeight | | "400",
    fontFamily: opts.series.fontFamily | | "inherit"
    }
    }
    }],
    credits: {
    enabled: false
    }
    });
    }
    function textRating(score) {
    if (score <= 50) {
    return "Low";
    } else if (score <= 65) {
    return "Pay Attention";
    } else if (score < 80) {
    return "Fair";
    } else {
    return "Good";
    }
    }
    // Create small daily gauges
    dailyScores.forEach((score, idx) => {
    let opts = {
    title: null,
    labels: { enabled: false },
    series: {
    fontSize: "16px",
    fontWeight: "400",
    fontFamily: "NicoClean"
    },
    yAxis: {
    title: null
    }
    }
    createGauge(score, idx, opts);
    });
    // Create main weekly gauge
    createGauge(weeklyScore, "all", {
    title: null,
    height: "80%",
    labels: {
    distance: 15
    },
    series: {
    fontSize: "3em",
    fontWeight: "550"
    },
    yAxis: {
    title: textRating(weeklyScore)
    }
    });
  </script>
```

            [#](https://usetrmnl.com/framework_v2/chart#multi-series-line-chart)

#### Multi-Series Line Chart

              For comparing data across multiple time periods or categories, multi-series line charts are ideal. This example demonstrates a comparison between current and previous period data with distinct styling for each series.

                                $85,240
                                Total Sales

                                Pending Orders

                                  Jul 01 - Jul 15

                                Current

                                $128
                                AOV

                                Fulfilled Orders

                                  Jun 15 - Jun 30

                                Previous

                      Charts
                      Multi-Series Line Chart

	```
<!-- import Highcharts libraries -->
  <script src="https://usetrmnl.com/js/highcharts/12.3.0/highcharts.js"></script>
  <script src="https://usetrmnl.com/js/highcharts/12.3.0/highcharts-more.js"></script>
  <script src="https://usetrmnl.com/js/highcharts/12.3.0/pattern-fill.js"></script>
  <div class="view view--full">
    <div class="layout layout--col gap--none">
      <div class="grid grid--cols-7 mb--5">
        <div class="h--32">
          <div id="day_0" class="h--24"></div>
          <span class="description text--center">Monday</span>
        </div>
        <div class="h--32">
          <div id="day_1" class="h--24"></div>
          <span class="description text--center">Tuesday</span>
        </div>
        <div class="h--32">
          <div id="day_2" class="h--24"></div>
          <span class="description text--center">Wednesday</span>
        </div>
        <div class="h--32">
          <div id="day_3" class="h--24"></div>
          <span class="description text--center">Thursday</span>
        </div>
        <div class="h--32">
          <div id="day_4" class="h--24"></div>
          <span class="description text--center">Friday</span>
        </div>
        <div class="h--32">
          <div id="day_5" class="h--24"></div>
          <span class="description text--center">Saturday</span>
        </div>
        <div class="h--32">
          <div id="day_6" class="h--24"></div>
          <span class="description text--center">Sunday</span>
        </div>
      </div>
      <div class="w-full b-h-gray-5"></div>
      <div class="grid">
        <div class="col--span-1 col--center">
          <div id="day_all" class="w-[340px] mt--5"></div>
        </div>
        <div class="col--span-1 gap--large">
          <div class="flex flex--col gap--medium w--full flex--center">
            <div class="grid grid--cols-2">
              <div class="item">
                <div class="meta"></div>
                <div class="content">
                  <span class="value value--tnums">18%</span>
                  <span class="label">REM Sleep</span>
                </div>
              </div>
              <div class="item">
                <div class="meta"></div>
                <div class="content">
                  <span class="value value--tnums">23%</span>
                  <span class="label">Deep Sleep</span>
                </div>
              </div>
            </div>
            <div class="b-h-gray-5 w-full"></div>
            <div class="grid grid--cols-2">
              <div class="item">
                <div class="meta"></div>
                <div class="content">
                  <span class="value value--small value--tnums">12m</span>
                  <span class="label">Time to Sleep</span>
                </div>
              </div>
              <div class="item">
                <div class="meta"></div>
                <div class="content">
                  <span class="value value--small value--tnums">7h 32min</span>
                  <span class="label">Sleep Duration</span>
                </div>
              </div>
            </div>
            <div class="b-h-gray-5 w-full"></div>
            <div class="grid grid--cols-2">
              <div class="item">
                <div class="meta"></div>
                <div class="content">
                  <span class="value value--small value--tnums">8</span>
                  <span class="label">Toss & Turns</span>
                </div>
              </div>
              <div class="item">
                <div class="meta"></div>
                <div class="content">
                  <span class="value value--small value--tnums">0.5%</span>
                  <span class="label">Snoring</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    var dailyScores = [92, 95, 81, 56, 81, 72, 85];
    var weeklyScore = 82;
    function createGauge(score, day, opts) {
    opts | | = {
    title: null,
    height: "80%",
    labels: {
    distance: 15,
    style: {
    fontSize: "16px"
    }
    },
    series: {
    fontSize: "3em"
    },
    yAxis: {
    title: textRating(score)
    }
    };
    Highcharts.chart(`day_${day}`, {
    chart: {
    type: "gauge",
    height: opts.height,
    animation: false
    },
    title: {
    text: opts.title
    },
    pane: {
    startAngle: -150,
    endAngle: 150,
    background: {
    backgroundColor: "transparent",
    borderWidth: 0
    }
    },
    plotOptions: {
    gauge: {
    animation: false,
    pivot: {
    backgroundColor: "transparent"
    },
    dial: {
    backgroundColor: "transparent",
    baseWidth: 0,
    },
    }
    },
    yAxis: {
    min: 0,
    max: 100,
    minorTickInterval: 0,
    tickColor: "#ffffff",
    tickLength: 40,
    tickPixelInterval: 40,
    tickWidth: 0,
    lineWidth: 0,
    title: {
    text: opts.yAxis.title,
    style: {
    color: "#000000",
    fontFamily: "NicoPups",
    fontSize: "16px"
    }
    },
    labels: {
    ...opts.labels,
    style: {
    fontSize: "16px"
    }
    },
    plotBands: [{
    from: 1,
    to: score,
    color: {
    pattern: {
    image: "https://usetrmnl.com/images/grayscale/gray-2.png",
    width: 12,
    height: 12
    }
    },
    innerRadius: "82%",
    borderRadius: "50%"
    }, {
    from: score + 1,
    to: 100,
    color: {
    pattern: {
    image: "https://usetrmnl.com/images/grayscale/gray-5.png",
    width: 12,
    height: 12
    }
    },
    innerRadius: "82%",
    borderRadius: "50%",
    }]
    },
    series: [{
    name: "Score",
    data: [score],
    dataLabels: {
    borderWidth: 0,
    style: {
    fontSize: opts.series.fontSize,
    fontWeight: opts.series.fontWeight | | "400",
    fontFamily: opts.series.fontFamily | | "inherit"
    }
    }
    }],
    credits: {
    enabled: false
    }
    });
    }
    function textRating(score) {
    if (score <= 50) {
    return "Low";
    } else if (score <= 65) {
    return "Pay Attention";
    } else if (score < 80) {
    return "Fair";
    } else {
    return "Good";
    }
    }
    // Create small daily gauges
    dailyScores.forEach((score, idx) => {
    let opts = {
    title: null,
    labels: { enabled: false },
    series: {
    fontSize: "16px",
    fontWeight: "400",
    fontFamily: "NicoClean"
    },
    yAxis: {
    title: null
    }
    }
    createGauge(score, idx, opts);
    });
    // Create main weekly gauge
    createGauge(weeklyScore, "all", {
    title: null,
    height: "80%",
    labels: {
    distance: 15
    },
    series: {
    fontSize: "3em",
    fontWeight: "550"
    },
    yAxis: {
    title: textRating(weeklyScore)
    }
    });
  </script>
```

[#](https://usetrmnl.com/framework_v2/chart#bar-chart)

#### Bar Chart

Bar charts are ideal for comparing discrete categories side by side. This example displays four different metrics across multiple time periods.

$31,883
Revenue

$22,910
Expenses

$8,990
Marketing

$14,930
Operations

Charts
Bar Chart

```
<!-- import Highcharts libraries -->
  <script src="https://usetrmnl.com/js/highcharts/12.3.0/highcharts.js"></script>
  <script src="https://usetrmnl.com/js/highcharts/12.3.0/highcharts-more.js"></script>
  <script src="https://usetrmnl.com/js/highcharts/12.3.0/pattern-fill.js"></script>
  <div class="view view--full">
    <div class="layout layout--col gap--none">
      <div class="grid grid--cols-7 mb--5">
<div class="h--32">
<div id="day_0" class="h--24"></div>
<span class="description text--center">Monday</span>
</div>
<div class="h--32">
<div id="day_1" class="h--24"></div>
<span class="description text--center">Tuesday</span>
</div>
<div class="h--32">
<div id="day_2" class="h--24"></div>
<span class="description text--center">Wednesday</span>
</div>
<div class="h--32">
<div id="day_3" class="h--24"></div>
<span class="description text--center">Thursday</span>
</div>
<div class="h--32">
<div id="day_4" class="h--24"></div>
<span class="description text--center">Friday</span>
</div>
<div class="h--32">
<div id="day_5" class="h--24"></div>
<span class="description text--center">Saturday</span>
</div>
<div class="h--32">
<div id="day_6" class="h--24"></div>
<span class="description text--center">Sunday</span>
</div>
      </div>
      <div class="w-full b-h-gray-5"></div>
      <div class="grid">
<div class="col--span-1 col--center">
<div id="day_all" class="w-[340px] mt--5"></div>
</div>
<div class="col--span-1 gap--large">
<div class="flex flex--col gap--medium w--full flex--center">
<div class="grid grid--cols-2">
<div class="item">
<div class="meta"></div>
<div class="content">
<span class="value value--tnums">18%</span>
<span class="label">REM Sleep</span>
</div>
</div>
<div class="item">
<div class="meta"></div>
<div class="content">
<span class="value value--tnums">23%</span>
<span class="label">Deep Sleep</span>
</div>
</div>
</div>
<div class="b-h-gray-5 w-full"></div>
<div class="grid grid--cols-2">
<div class="item">
<div class="meta"></div>
<div class="content">
<span class="value value--small value--tnums">12m</span>
<span class="label">Time to Sleep</span>
</div>
</div>
<div class="item">
<div class="meta"></div>
<div class="content">
<span class="value value--small value--tnums">7h 32min</span>
<span class="label">Sleep Duration</span>
</div>
</div>
</div>
<div class="b-h-gray-5 w-full"></div>
<div class="grid grid--cols-2">
<div class="item">
<div class="meta"></div>
<div class="content">
<span class="value value--small value--tnums">8</span>
<span class="label">Toss & Turns</span>
</div>
</div>
<div class="item">
<div class="meta"></div>
<div class="content">
<span class="value value--small value--tnums">0.5%</span>
<span class="label">Snoring</span>
</div>
</div>
</div>
</div>
</div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    var dailyScores = [92, 95, 81, 56, 81, 72, 85];
    var weeklyScore = 82;
    function createGauge(score, day, opts) {
    opts | | = {
    title: null,
    height: "80%",
    labels: {
    distance: 15,
    style: {
    fontSize: "16px"
    }
    },
    series: {
    fontSize: "3em"
    },
    yAxis: {
    title: textRating(score)
    }
    };
    Highcharts.chart(`day_${day}`, {
    chart: {
    type: "gauge",
    height: opts.height,
    animation: false
    },
    title: {
    text: opts.title
    },
    pane: {
    startAngle: -150,
    endAngle: 150,
    background: {
    backgroundColor: "transparent",
    borderWidth: 0
    }
    },
    plotOptions: {
    gauge: {
    animation: false,
    pivot: {
    backgroundColor: "transparent"
    },
    dial: {
    backgroundColor: "transparent",
    baseWidth: 0,
    },
    }
    },
    yAxis: {
    min: 0,
    max: 100,
    minorTickInterval: 0,
    tickColor: "#ffffff",
    tickLength: 40,
    tickPixelInterval: 40,
    tickWidth: 0,
    lineWidth: 0,
    title: {
    text: opts.yAxis.title,
    style: {
    color: "#000000",
    fontFamily: "NicoPups",
    fontSize: "16px"
    }
    },
    labels: {
    ...opts.labels,
    style: {
    fontSize: "16px"
    }
    },
    plotBands: [{
    from: 1,
    to: score,
    color: {
    pattern: {
    image: "https://usetrmnl.com/images/grayscale/gray-2.png",
    width: 12,
    height: 12
    }
    },
    innerRadius: "82%",
    borderRadius: "50%"
    }, {
    from: score + 1,
    to: 100,
    color: {
    pattern: {
    image: "https://usetrmnl.com/images/grayscale/gray-5.png",
    width: 12,
    height: 12
    }
    },
    innerRadius: "82%",
    borderRadius: "50%",
    }]
    },
    series: [{
    name: "Score",
    data: [score],
    dataLabels: {
    borderWidth: 0,
    style: {
    fontSize: opts.series.fontSize,
    fontWeight: opts.series.fontWeight | | "400",
    fontFamily: opts.series.fontFamily | | "inherit"
    }
    }
    }],
    credits: {
    enabled: false
    }
    });
    }
    function textRating(score) {
    if (score <= 50) {
    return "Low";
    } else if (score <= 65) {
    return "Pay Attention";
    } else if (score < 80) {
    return "Fair";
    } else {
    return "Good";
    }
    }
    // Create small daily gauges
    dailyScores.forEach((score, idx) => {
    let opts = {
    title: null,
    labels: { enabled: false },
    series: {
    fontSize: "16px",
    fontWeight: "400",
    fontFamily: "NicoClean"
    },
    yAxis: {
    title: null
    }
    }
    createGauge(score, idx, opts);
    });
    // Create main weekly gauge
    createGauge(weeklyScore, "all", {
    title: null,
    height: "80%",
    labels: {
    distance: 15
    },
    series: {
    fontSize: "3em",
    fontWeight: "550"
    },
    yAxis: {
    title: textRating(weeklyScore)
    }
    });
  </script>
```

            [#](https://usetrmnl.com/framework_v2/chart#gauge-chart)

#### Gauge Chart

              Gauge charts can effectively display single metrics or scores. This example shows multiple gauges in a row with a main summary gauge,
              perfect for displaying daily and weekly metrics like sleep quality scores.

                          Monday

                          Tuesday

                          Wednesday

                          Thursday

                          Friday

                          Saturday

                          Sunday

                                  18%
                                  REM Sleep

                                  23%
                                  Deep Sleep

                                  12m
                                  Time to Sleep

                                  7h 32min
                                  Sleep Duration

                                  Toss & Turns

                                  0.5%
                                  Snoring

                      Charts
                      Gauge Chart

	```
<!-- import Highcharts libraries -->
  <script src="https://usetrmnl.com/js/highcharts/12.3.0/highcharts.js"></script>
  <script src="https://usetrmnl.com/js/highcharts/12.3.0/highcharts-more.js"></script>
  <script src="https://usetrmnl.com/js/highcharts/12.3.0/pattern-fill.js"></script>
  <div class="view view--full">
    <div class="layout layout--col gap--none">
      <div class="grid grid--cols-7 mb--5">
        <div class="h--32">
          <div id="day_0" class="h--24"></div>
          <span class="description text--center">Monday</span>
        </div>
        <div class="h--32">
          <div id="day_1" class="h--24"></div>
          <span class="description text--center">Tuesday</span>
        </div>
        <div class="h--32">
          <div id="day_2" class="h--24"></div>
          <span class="description text--center">Wednesday</span>
        </div>
        <div class="h--32">
          <div id="day_3" class="h--24"></div>
          <span class="description text--center">Thursday</span>
        </div>
        <div class="h--32">
          <div id="day_4" class="h--24"></div>
          <span class="description text--center">Friday</span>
        </div>
        <div class="h--32">
          <div id="day_5" class="h--24"></div>
          <span class="description text--center">Saturday</span>
        </div>
        <div class="h--32">
          <div id="day_6" class="h--24"></div>
          <span class="description text--center">Sunday</span>
        </div>
      </div>
      <div class="w-full b-h-gray-5"></div>
      <div class="grid">
        <div class="col--span-1 col--center">
          <div id="day_all" class="w-[340px] mt--5"></div>
        </div>
        <div class="col--span-1 gap--large">
          <div class="flex flex--col gap--medium w--full flex--center">
            <div class="grid grid--cols-2">
              <div class="item">
                <div class="meta"></div>
                <div class="content">
                  <span class="value value--tnums">18%</span>
                  <span class="label">REM Sleep</span>
                </div>
              </div>
              <div class="item">
                <div class="meta"></div>
                <div class="content">
                  <span class="value value--tnums">23%</span>
                  <span class="label">Deep Sleep</span>
                </div>
              </div>
            </div>
            <div class="b-h-gray-5 w-full"></div>
            <div class="grid grid--cols-2">
              <div class="item">
                <div class="meta"></div>
                <div class="content">
                  <span class="value value--small value--tnums">12m</span>
                  <span class="label">Time to Sleep</span>
                </div>
              </div>
              <div class="item">
                <div class="meta"></div>
                <div class="content">
                  <span class="value value--small value--tnums">7h 32min</span>
                  <span class="label">Sleep Duration</span>
                </div>
              </div>
            </div>
            <div class="b-h-gray-5 w-full"></div>
            <div class="grid grid--cols-2">
              <div class="item">
                <div class="meta"></div>
                <div class="content">
                  <span class="value value--small value--tnums">8</span>
                  <span class="label">Toss & Turns</span>
                </div>
              </div>
              <div class="item">
                <div class="meta"></div>
                <div class="content">
                  <span class="value value--small value--tnums">0.5%</span>
                  <span class="label">Snoring</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    var dailyScores = [92, 95, 81, 56, 81, 72, 85];
    var weeklyScore = 82;
    function createGauge(score, day, opts) {
    opts | | = {
    title: null,
    height: "80%",
    labels: {
    distance: 15,
    style: {
    fontSize: "16px"
    }
    },
    series: {
    fontSize: "3em"
    },
    yAxis: {
    title: textRating(score)
    }
    };
    Highcharts.chart(`day_${day}`, {
    chart: {
    type: "gauge",
    height: opts.height,
    animation: false
    },
    title: {
    text: opts.title
    },
    pane: {
    startAngle: -150,
    endAngle: 150,
    background: {
    backgroundColor: "transparent",
    borderWidth: 0
    }
    },
    plotOptions: {
    gauge: {
    animation: false,
    pivot: {
    backgroundColor: "transparent"
    },
    dial: {
    backgroundColor: "transparent",
    baseWidth: 0,
    },
    }
    },
    yAxis: {
    min: 0,
    max: 100,
    minorTickInterval: 0,
    tickColor: "#ffffff",
    tickLength: 40,
    tickPixelInterval: 40,
    tickWidth: 0,
    lineWidth: 0,
    title: {
    text: opts.yAxis.title,
    style: {
    color: "#000000",
    fontFamily: "NicoPups",
    fontSize: "16px"
    }
    },
    labels: {
    ...opts.labels,
    style: {
    fontSize: "16px"
    }
    },
    plotBands: [{
    from: 1,
    to: score,
    color: {
    pattern: {
    image: "https://usetrmnl.com/images/grayscale/gray-2.png",
    width: 12,
    height: 12
    }
    },
    innerRadius: "82%",
    borderRadius: "50%"
    }, {
    from: score + 1,
    to: 100,
    color: {
    pattern: {
    image: "https://usetrmnl.com/images/grayscale/gray-5.png",
    width: 12,
    height: 12
    }
    },
    innerRadius: "82%",
    borderRadius: "50%",
    }]
    },
    series: [{
    name: "Score",
    data: [score],
    dataLabels: {
    borderWidth: 0,
    style: {
    fontSize: opts.series.fontSize,
    fontWeight: opts.series.fontWeight | | "400",
    fontFamily: opts.series.fontFamily | | "inherit"
    }
    }
    }],
    credits: {
    enabled: false
    }
    });
    }
    function textRating(score) {
    if (score <= 50) {
    return "Low";
    } else if (score <= 65) {
    return "Pay Attention";
    } else if (score < 80) {
    return "Fair";
    } else {
    return "Good";
    }
    }
    // Create small daily gauges
    dailyScores.forEach((score, idx) => {
    let opts = {
    title: null,
    labels: { enabled: false },
    series: {
    fontSize: "16px",
    fontWeight: "400",
    fontFamily: "NicoClean"
    },
    yAxis: {
    title: null
    }
    }
    createGauge(score, idx, opts);
    });
    // Create main weekly gauge
    createGauge(weeklyScore, "all", {
    title: null,
    height: "80%",
    labels: {
    distance: 15
    },
    series: {
    fontSize: "3em",
    fontWeight: "550"
    },
    yAxis: {
    title: textRating(weeklyScore)
    }
    });
  </script>
```

[Table

Create data tables optimized for 1-bit rendering

Previous](/framework_v2/table)

[Progress

Display progress bars in different styles

Next](/framework_v2/progress)

    [Framework Index](/framework_v2)

---

## Progress

*Source: https://usetrmnl.com/framework_v2/progress*

# Progress

      The Progress component provides visual indicators for completion status and step-based processes.
      Optimized for e-ink displays with bitmap patterns for 1-bit displays and solid colors for 4-bit+ displays.

[#](https://usetrmnl.com/framework_v2/progress#progress-variants)

### Progress Variants

Progress indicators come in two variants: bar for continuous progress and dots for discrete steps.
Each variant supports three sizes (small, default, large) and three emphasis levels.

[#](https://usetrmnl.com/framework_v2/progress#bar-progress)

#### Bar Progress

The bar variant displays progress as a horizontal filled bar. Use the `dot--current` element with inline width styling to set the progress percentage.

Download Progress
75%

Battery Level
90%

Storage Used
50%

Default Emphasis
60%

Emphasis 2
60%

Emphasis 3
60%

Progress
Bar Variant

`dot--current`

[#](https://usetrmnl.com/framework_v2/progress#dots-progress)

#### Dots Progress

The dots variant shows discrete steps. Use `dot--current` for completed steps and
`dot--current` for the active step.

Setup Progress
                              3 of 5

Week Progress
Wed

Onboarding
2/4

Default Emphasis
2/3

Emphasis 2
2/3

Emphasis 3
2/3

Progress
Dots Variant

`dot--current`

[Chart

Visualize data optimized for 1-bit rendering

Previous](/framework_v2/chart)

[Overflow

Handle content overflow in fixed-size containers

Next](/framework_v2/overflow)

    [Framework Index](/framework_v2)

---

# Modulations

## Overflow

*Source: https://usetrmnl.com/framework_v2/overflow*

# Overflow

      The Overflow Management system provides a way to handle layouts that exceed a specified height limit.
      It automatically hides excess items and provides a visual indicator for hidden content.

[#](https://usetrmnl.com/framework_v2/overflow#basic-usage)

### Basic Usage

To enable overflow management on a list, add the `data-list-max-columns-md-scale-large="4"`
attribute. Specify a custom maximum height of the container using `data-list-max-columns-md-scale-large="4"` expressed in pixel values.

1Team MeetingWeekly team sync-up9:00 AM - 10:00 AMConfirmed
2Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
4Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority

3Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
3Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority
3Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
3Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority
3Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
3Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority
3Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
3Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority

1Team MeetingWeekly team sync-up9:00 AM - 10:00 AMConfirmed
2Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
4Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority

3Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
3Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority
3Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
3Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority
3Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
3Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority
3Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
3Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority

Overflow Management
With Hidden Count

`data-list-max-columns-md-scale-large="4"`

[#](https://usetrmnl.com/framework_v2/overflow#configuration-options)

### Configuration Options

The overflow management system can be customized using various data attributes to control its behavior.

[#](https://usetrmnl.com/framework_v2/overflow#height-limit)

#### Height Limit

Use `data-list-max-columns-md-scale-large="4"` to set a custom maximum height (in pixels).
If not specified, it defaults to "auto" which automatically calculates the available height based on the container's dimensions.

[#](https://usetrmnl.com/framework_v2/overflow#hidden-count-indicator)

#### Hidden Count Indicator

Set `data-list-max-columns-md-scale-large="4"` to display
an "And X more" message showing how many items are hidden.

[#](https://usetrmnl.com/framework_v2/overflow#multiple-columns)

#### Multiple Columns

Use `data-list-max-columns-md-scale-large="4"` to automatically
wrap items across multiple columns when necessary. If not specified, it defaults to 1 column.

[#](https://usetrmnl.com/framework_v2/overflow#automatic-multi-column-layout)

### Automatic Multi-Column Layout

When content exceeds the available height, the system can automatically distribute items across multiple columns
to make better use of horizontal space. Use `data-list-max-columns-md-scale-large="4"` to specify the maximum number of columns.

1Team MeetingWeekly team sync-up9:00 AM - 10:00 AMConfirmed
2Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
4Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority
5Database BackupPerform weekly database maintenance6:00 PM - 7:00 PMAutomated
6Security AuditMonthly security assessment10:00 AM - 12:00 PMCritical
7Performance ReviewQuarterly team performance evaluation1:00 PM - 2:30 PMScheduled
8System UpdateApply latest security patches11:00 PM - 12:00 AMMaintenance
9Training SessionNew employee onboarding9:30 AM - 11:30 AMRequired
10Budget PlanningQ4 financial planning meeting3:00 PM - 5:00 PMPlanning
11Vendor MeetingQuarterly vendor review2:00 PM - 3:00 PMBusiness
12Documentation UpdateUpdate project documentation4:00 PM - 5:30 PMDocumentation
13Infrastructure CheckMonitor server health and performance8:00 AM - 9:00 AMMonitoring
14Coffee ChatInformal team bonding session10:15 AM - 10:45 AMSocial
15API TestingValidate new API endpoints11:00 AM - 12:30 PMTesting
16Customer Feedback ReviewAnalyze user feedback and feature requests1:30 PM - 2:30 PMResearch
17Sprint PlanningPlan upcoming development sprint3:00 PM - 4:00 PMPlanning
18Deployment PipelineSet up automated deployment process4:30 PM - 6:00 PMDevOps
19Learning SessionTechnology deep-dive presentation5:00 PM - 6:00 PMEducation
20RetrospectiveTeam reflection on past sprint6:00 PM - 7:00 PMReview
21Mobile App TestingCross-platform compatibility testing7:30 PM - 8:30 PMQA
22Data AnalyticsGenerate monthly usage reports9:00 PM - 10:00 PMAnalytics
23Emergency ResponseOn-call incident response protocol12:00 AM - 12:00 AMEmergency
24TestingUnit and integration testing4:00 PM - 5:30 PMConfirmed

Multi-Column Layout
Max 2 Columns

`data-list-max-columns-md-scale-large="4"`

[#](https://usetrmnl.com/framework_v2/overflow#fixed-height-limit)

### Fixed Height Limit

You can set a specific maximum height in pixels using `data-list-max-columns-md-scale-large="4"`
with a numeric value. This is useful when you need precise control over the container height regardless of the available space.

1Team MeetingWeekly team sync-up9:00 AM - 10:00 AMConfirmed
2Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
4Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority
5Database BackupPerform weekly database maintenance6:00 PM - 7:00 PMAutomated
6Security AuditMonthly security assessment10:00 AM - 12:00 PMCritical
7Performance ReviewQuarterly team performance evaluation1:00 PM - 2:30 PMScheduled
8System UpdateApply latest security patches11:00 PM - 12:00 AMMaintenance

Fixed Height Limit
200px Maximum

`data-list-max-columns-md-scale-large="4"`

[#](https://usetrmnl.com/framework_v2/overflow#advanced-usage)

### Advanced Usage

Multiple column lists can be arranged vertically using the layout system. Each list maintains its own overflow management
while sharing the available vertical space within the container.

1Morning StandupDaily team synchronization9:00 AM - 9:30 AMDaily
2Sprint PlanningPlan upcoming development sprint10:30 AM - 12:00 PMPlanning
3Code ReviewReview pending pull requests2:00 PM - 3:00 PMReview
4Team RetrospectiveReflect on sprint outcomes4:00 PM - 5:00 PMRetrospective
5Architecture ReviewTechnical design discussion3:30 PM - 4:30 PMTechnical
6Client DemoShowcase new features to stakeholders1:00 PM - 2:00 PMDemo

1Database MigrationUpdate production schema11:00 PM - 12:00 AMOff-hours
2Security PatchApply latest security updates11:00 PM - 11:30 PMSecurity
3Load TestingPerformance validation under load6:00 PM - 7:00 PMTesting
4Backup VerificationValidate backup integrity12:00 AM - 12:30 AMMaintenance
5Log AnalysisReview system logs for anomalies8:00 AM - 9:00 AMMonitoring
6Monitoring SetupConfigure new alerting rules5:00 PM - 6:00 PMConfiguration

1Budget ReviewQ4 financial planning session10:00 AM - 11:00 AMFinancial
2Vendor AssessmentEvaluate third-party service providers2:30 PM - 3:30 PMProcurement
3Contract RenewalNegotiate terms with key partners4:00 PM - 5:00 PMLegal
4Market AnalysisResearch competitive landscape1:00 PM - 2:00 PMResearch
5Compliance AuditAnnual regulatory compliance check9:00 AM - 10:00 AMCompliance

1Employee TrainingNew technology workshop11:00 AM - 12:00 PMTraining
2Performance ReviewsAnnual employee evaluations3:00 PM - 4:00 PMHR
3Team BuildingQuarterly team bonding activity5:00 PM - 7:00 PMSocial
4Office RenovationWorkspace improvement planning12:00 PM - 1:00 PMFacilities
5Safety DrillEmergency evacuation practice2:00 PM - 2:30 PMSafety

Advanced Layout
Vertical Column Groups

`data-list-max-columns-md-scale-large="4"`

[#](https://usetrmnl.com/framework_v2/overflow#group-headers)

### Group Headers

When displaying grouped content in multiple columns, you can use the `data-list-max-columns-md-scale-large="4"` class to mark elements that separate groups or sections.
This ensures that group headers are never left alone at the bottom of a column, and when possible, the entire group (header + items)
will be kept together in the same column.

[#](https://usetrmnl.com/framework_v2/overflow#groups-with-sufficient-space)

#### Groups with Sufficient Space

When there's enough space and the `data-list-max-columns-md-scale-large="4"` allows it,
each group can occupy its own column for optimal visual organization. This creates a clean, well-structured layout where
related items are naturally grouped together.

Today
1Morning MeetingTeam sync and updates9:00 AM - 9:30 AMDaily
2Code ReviewReview feature branch10:30 AM - 11:30 AMReview
3Lunch BreakTeam lunch at downtown12:30 PM - 1:30 PMBreak
4Status ReportWeekly progress summary4:00 PM - 4:30 PMReporting

Tomorrow
1Sprint PlanningPlan next two weeks10:00 AM - 12:00 PMPlanning
2Client DemoShow new features2:00 PM - 3:00 PMDemo
3Architecture ReviewDiscuss system design4:00 PM - 5:00 PMTechnical

This Week
1Security AuditQuarterly security reviewWednesdaySecurity
2Team RetrospectiveSprint reflectionFridayRetrospective
3Performance TestingLoad test new featuresThursdayTesting

Group Headers
Each Group in Own Column

`data-list-max-columns-md-scale-large="4"`

[#](https://usetrmnl.com/framework_v2/overflow#groups-with-content-overflow)

#### Groups with Content Overflow

When there are too many items to fit all groups in their own columns, the content flows naturally from left to right,
filling columns sequentially. The system still prevents orphaned headers and tries to keep groups together when possible,
but will split groups across columns when necessary to maximize space usage. When a group spills over to a new column,
a duplicate header with the `data-list-max-columns-md-scale-large="4"` class is automatically
added to the beginning of the new column to maintain visual context.

Today
1Morning MeetingTeam sync and updates9:00 AM - 9:30 AMDaily
2Code ReviewReview feature branch10:30 AM - 11:30 AMReview
3Lunch BreakTeam lunch at downtown12:30 PM - 1:30 PMBreak
4Client CallWeekly check-in with stakeholders2:00 PM - 3:00 PMClient
5Bug TriagePrioritize reported issues3:30 PM - 4:30 PMBugs
6Documentation UpdateUpdate API documentation4:30 PM - 5:30 PMDocs
7End of Day SyncReview progress and blockers5:30 PM - 6:00 PMSync

Tomorrow
1Sprint PlanningPlan next two weeks10:00 AM - 12:00 PMPlanning
2Client DemoShow new features2:00 PM - 3:00 PMDemo
3Architecture ReviewDiscuss system design4:00 PM - 5:00 PMTechnical
4Stakeholder MeetingProject milestone review9:00 AM - 10:00 AMStakeholder
5QA TestingRegression test suite1:00 PM - 2:00 PMQA
6Design WorkshopUI/UX design session3:00 PM - 4:00 PMDesign
7Technical Debt ReviewAssess code quality issues5:00 PM - 6:00 PMTechnical

This Week
1Security AuditQuarterly security reviewWednesdaySecurity
2Team RetrospectiveSprint reflectionFridayRetrospective
3Performance TestingLoad test new featuresThursdayTesting
4Database OptimizationQuery performance tuningWednesdayDatabase
5Code CleanupRefactor legacy modulesFridayRefactor
6Deployment PrepPrepare release candidateFridayDeploy
7Knowledge TransferOnboard new team memberThursdayTraining
8Sprint ReviewDemo completed workFridayReview
9API DocumentationUpdate endpoint specificationsWednesdayDocumentation
10User TestingConduct usability studiesThursdayUX Research
11Infrastructure ReviewAssess server capacity needsMondayInfrastructure
12Bug PrioritizationTriage reported issuesTuesdayBug Triage
13Feature PlanningRoadmap discussion for Q2ThursdayPlanning
14Third-party IntegrationImplement payment gatewayWednesdayIntegration
15Accessibility AuditWCAG compliance reviewFridayAccessibility
16Monitoring SetupConfigure alerting systemsTuesdayDevOps
17Data MigrationMove legacy customer dataWeekendMigration
18License RenewalUpdate software licensesMondayLegal
19Team TrainingNew framework workshopFridayEducation
20Release NotesDocument feature changesThursdayCommunication

Group Headers
Smart Group Distribution

`data-list-max-columns-md-scale-large="4"`

**How Group Headers Work:**
- Elements with the `data-list-max-columns-md-scale-large="4"` class will never be left as the last item in a column
- When a group header would be at the bottom of a column, the system attempts to move the entire group (header + all following items until the next group header) to the next column
- If the entire group doesn't fit in the next column, only the header is moved to prevent orphaned headers
- When a group spills over to a new column, a duplicate header with the `data-list-max-columns-md-scale-large="4"` class is automatically added to the beginning of the new column
- This ensures better visual hierarchy and readability across columns

[#](https://usetrmnl.com/framework_v2/overflow#responsive-max-columns)

### Responsive Max Columns

The maximum number of columns can be adjusted based on both screen size and UI scale. This allows for fine-tuned control
over how content flows across different device configurations. Scale modifiers must always be combined with size breakpoints -
standalone scale attributes are not supported.

[#](https://usetrmnl.com/framework_v2/overflow#small-scale-configuration)

#### Small Scale Configuration

This example shows conservative column counts optimized for small UI scales. As screen size increases,
the number of columns grows gradually to maintain readability at smaller scale factors.

1Team MeetingWeekly team sync-up9:00 AM - 10:00 AMConfirmed
2Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
4Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority
5Database BackupPerform weekly database maintenance6:00 PM - 7:00 PMAutomated
6Security AuditMonthly security assessment10:00 AM - 12:00 PMCritical
7Performance ReviewQuarterly team performance evaluation1:00 PM - 2:30 PMScheduled
8System UpdateApply latest security patches11:00 PM - 12:00 AMMaintenance
9Training SessionNew employee onboarding9:30 AM - 11:30 AMRequired
10Budget PlanningQ4 financial planning meeting3:00 PM - 5:00 PMPlanning
11Vendor MeetingQuarterly vendor review2:00 PM - 3:00 PMBusiness
12Documentation UpdateUpdate project documentation4:00 PM - 5:30 PMDocumentation
13Infrastructure CheckMonitor server health and performance8:00 AM - 9:00 AMMonitoring
14Coffee ChatInformal team bonding session10:15 AM - 10:45 AMSocial
15API TestingValidate new API endpoints11:00 AM - 12:30 PMTesting
16Customer Feedback ReviewAnalyze user feedback and feature requests1:30 PM - 2:30 PMResearch
17Sprint PlanningPlan upcoming development sprint3:00 PM - 4:00 PMPlanning
18Deployment PipelineSet up automated deployment process4:30 PM - 6:00 PMDevOps
19Learning SessionTechnology deep-dive presentation5:00 PM - 6:00 PMEducation
20RetrospectiveTeam reflection on past sprint6:00 PM - 7:00 PMReview
21Mobile App TestingCross-platform compatibility testing7:30 PM - 8:30 PMQA
22Data AnalyticsGenerate monthly usage reports9:00 PM - 10:00 PMAnalytics
23Emergency ResponseOn-call incident response protocol12:00 AM - 12:00 AMEmergency
24TestingUnit and integration testing4:00 PM - 5:30 PMConfirmed

Responsive Columns
Small Scale Config

`data-list-max-columns-md-scale-large="4"`

[#](https://usetrmnl.com/framework_v2/overflow#large-scale-configuration)

#### Large Scale Configuration

This example shows aggressive column counts optimized for large UI scales. The larger scale factor allows for more
columns at each breakpoint, making better use of available horizontal space when UI elements are larger.

1Team MeetingWeekly team sync-up9:00 AM - 10:00 AMConfirmed
2Client PresentationQuarterly review with XYZ Corp2:00 PM - 3:30 PMTentative
3Project DeadlineSubmit final deliverables for Project Alpha11:59 PMImportant
4Code ReviewReview pull requests for Project Beta3:30 PM - 4:30 PMHigh Priority
5Database BackupPerform weekly database maintenance6:00 PM - 7:00 PMAutomated
6Security AuditMonthly security assessment10:00 AM - 12:00 PMCritical
7Performance ReviewQuarterly team performance evaluation1:00 PM - 2:30 PMScheduled
8System UpdateApply latest security patches11:00 PM - 12:00 AMMaintenance
9Training SessionNew employee onboarding9:30 AM - 11:30 AMRequired
10Budget PlanningQ4 financial planning meeting3:00 PM - 5:00 PMPlanning
11Vendor MeetingQuarterly vendor review2:00 PM - 3:00 PMBusiness
12Documentation UpdateUpdate project documentation4:00 PM - 5:30 PMDocumentation
13Infrastructure CheckMonitor server health and performance8:00 AM - 9:00 AMMonitoring
14Coffee ChatInformal team bonding session10:15 AM - 10:45 AMSocial
15API TestingValidate new API endpoints11:00 AM - 12:30 PMTesting
16Customer Feedback ReviewAnalyze user feedback and feature requests1:30 PM - 2:30 PMResearch
17Sprint PlanningPlan upcoming development sprint3:00 PM - 4:00 PMPlanning
18Deployment PipelineSet up automated deployment process4:30 PM - 6:00 PMDevOps
19Learning SessionTechnology deep-dive presentation5:00 PM - 6:00 PMEducation
20RetrospectiveTeam reflection on past sprint6:00 PM - 7:00 PMReview
21Mobile App TestingCross-platform compatibility testing7:30 PM - 8:30 PMQA
22Data AnalyticsGenerate monthly usage reports9:00 PM - 10:00 PMAnalytics
23Emergency ResponseOn-call incident response protocol12:00 AM - 12:00 AMEmergency
24TestingUnit and integration testing4:00 PM - 5:30 PMConfirmed

Responsive Columns
Large Scale Config

`data-list-max-columns-md-scale-large="4"`

**How Responsive Max Columns Work:**
- **Size-only attributes** set base column counts for each breakpoint (e.g., `data-list-max-columns-md-scale-large="4"`)
- **Size + scale combinations** override the base counts when both conditions match (e.g., `data-list-max-columns-md-scale-large="4"`)
- **Scale-only attributes are not supported** - scale must always be paired with a size breakpoint
- The system follows CSS-like specificity: combined size+scale rules take precedence over size-only rules
- Users can test different screen sizes in the preview to see how column counts adapt based on the current scale setting

[Progress

Display progress bars in different styles

Previous](/framework_v2/progress)

[Format Value

Format numbers and values with consistent styling

Next](/framework_v2/format_value)

    [Framework Index](/framework_v2)

---

## Format Value

*Source: https://usetrmnl.com/framework_v2/format_value*

# Format Value

      The Value Formatting system automatically formats numeric values to fit within their containers while maintaining readability.
      It supports various formatting options including abbreviations (K, M, B), dynamic precision adjustment, and currency values with proper symbol placement.

[#](https://usetrmnl.com/framework_v2/format_value#basic-usage)

### Basic Usage

To enable automatic value formatting, add the `ja-JP`
attribute to your element.

XLarge

Regular

Small

XLarge

Regular

Small

XLarge

Regular

Small

Value Formatting
Size Comparison

`ja-JP`

To add a delimiter to large numbers, for example 1234 => 1,234, see [custom filters](https://intercom.help/trmnl/en/articles/10347358-custom-plugin-filters).

[#](https://usetrmnl.com/framework_v2/format_value#currency-values)

### Currency Values

Values with currency symbols are automatically formatted while maintaining the symbol placement.

$2345678
XLarge

$2345678
Regular

$2345678
Small

$456789
XLarge

$456789
Regular

$456789
Small

$34562
XLarge

$34562
Regular

$34562
Small

Value Formatting
Currency Example

`ja-JP`

To add a currency symbol, for example 1234 => $1,234, see [custom filters](https://intercom.help/trmnl/en/articles/10347358-custom-plugin-filters).

Supported currency symbols include:

`ja-JP`
US Dollar

`ja-JP`
Euro

`ja-JP`
British Pound

`ja-JP`
Japanese Yen / Chinese Yuan

`ja-JP`
Ukrainian Hryvnia

`ja-JP`
Indian Rupee

`ja-JP`
Israeli Shekel

`ja-JP`
Korean Won

`ja-JP`
Vietnamese Dong

`ja-JP`
Philippine Peso

`ja-JP`
Russian Ruble

`ja-JP`
Bitcoin

[#](https://usetrmnl.com/framework_v2/format_value#regional-number-formats)

### Regional Number Formats

Numbers can be formatted according to different regional standards using the `ja-JP` attribute.

$123456.78
United States (en-US)

$123456.78
United States (en-US)

€123456.78
German (de-DE)

€123456.78
German (de-DE)

€123456.78
French (fr-FR)

€123456.78
French (fr-FR)

Value Formatting
Regional Formats

`ja-JP`

Common locale options include:

`ja-JP`
United States (123,456.78)

`ja-JP`
German (123.456,78)

`ja-JP`
French (123 456,78)

`ja-JP`
British English (123,456.78)

`ja-JP`
Japanese (123,456.78)

If no locale is specified, numbers will be formatted using US format (en-US) by default.

[Overflow

Handle content overflow in fixed-size containers

Previous](/framework_v2/overflow)

[Fit Value

Automatically resize numbers and values to fit within their containers

Next](/framework_v2/fit_value)

    [Framework Index](/framework_v2)

---

## Fit Value

*Source: https://usetrmnl.com/framework_v2/fit_value*

# Fit Value

      The Text Fitting system automatically adjusts the font size, weight, and line height of text elements so that they fit
      within their containers. This dynamic resizing is especially useful for responsive layouts where available space
      may vary, ensuring that content is always legible.

[#](https://usetrmnl.com/framework_v2/fit_value#basic-usage)

### Basic Usage

To enable automatic text resizing, add the `data-value-fit-max-height`
attribute to your element. For numeric values, this is all you need - the system will automatically adjust the element's
font size and weight to fit the container width. Text content requires additional configuration (see Text Fitting below).

$1,000

XXXLarge

$1,000,000

XXXLarge

$1,000,000,000

XXXLarge

Fit Value
Number Formatting

`data-value-fit-max-height`

[#](https://usetrmnl.com/framework_v2/fit_value#text-fitting)

### Text Fitting

When fitting text content, you must specify a maximum height constraint using the
`data-value-fit-max-height` attribute (in pixels).
This ensures text content stays within both width and height constraints while maintaining readability through
automatic font size and weight adjustments.

Hello. This is a really long headline that will need to adjust significantly to fit within its container space and look good in a layout.

XXXLarge

Hello. This is a medium length headline that fits nicely.

XXXLarge

Hello.

XXXLarge

Fit Value
Text Formatting

`data-value-fit-max-height`

[Format Value

Format numbers and values with consistent styling

Previous](/framework_v2/format_value)

[Content Limiter

Change font size when content overflows to fit within the container

Next](/framework_v2/content_limiter)

    [Framework Index](/framework_v2)

---

## Content Limiter

*Source: https://usetrmnl.com/framework_v2/content_limiter*

# Content Limiter

      The Content Limiter system automatically restricts the height of content areas based on the view type, ensuring consistent layouts.
      When content exceeds the height threshold, it adds a class that makes text smaller, but content might still overflow.
      It should be used together with the Content component for proper formatting.

[#](https://usetrmnl.com/framework_v2/content_limiter#basic-usage)

### Basic Usage

To enable automatic content limiting, add the `view--half_horizontal`
attribute to your content element.

Long Content Example

Contrary to what one might think, the Lorem ipsum text, despite being meaningless, has noble origins.

Objectively composed of unrelated words, Lorem ipsum owes its existence to Marco Tullio Cicerone and to some steps of his De finibus bonorum et malorum (The highest good and the highest evil) written in 45 BC, a classic of Latin literature dating back more than 2000 years ago.

The discovery was made by Richard McClintock , a professor of Latin at Hampden-Sydney College in Virginia, who faced the impetuous recurrence of the dark word consectetur in the text Lorem ipsum researched its origins to identify them in sections 1.10.32 and 1.10.33 of the aforementioned Cicero's philosophical work.

The words taken from one of the dialogues contained in the De finibus are therefore the pieces of the most famous nonsensical text in the world.

A discovery that has given greater importance to the Lorem ipsum which has remained on the crest of the wave since 500, that is when, according to Professor Richard McClintock, its use spread among the printers of the time.

Of course we know that to make it known to most was a publicity of the Sixties, that of the transferable Letraset character sheets: transparent adhesive sheets on which the Lorem ipsum text was imprinted easily transferable on the editorial products before the advent of the computer.

Content Limiter
Text Exceeding Threshold

Short Content Example

Contrary to what one might think, the Lorem ipsum text, despite being meaningless, has noble origins.

Objectively composed of unrelated words, Lorem ipsum owes its existence to Marco Tullio Cicerone and to some steps of his De finibus bonorum et malorum (The highest good and the highest evil) written in 45 BC, a classic of Latin literature dating back more than 2000 years ago.

The discovery was made by Richard McClintock , a professor of Latin at Hampden-Sydney College in Virginia, who faced the impetuous recurrence of the dark word consectetur in the text Lorem ipsum researched its origins to identify them in sections 1.10.32 and 1.10.33 of the aforementioned Cicero's philosophical work.

Content Limiter
Text Within Threshold

`view--half_horizontal`

When content exceeds the height threshold (which varies by view type), it will add the `view--half_horizontal` class to make text smaller.
Note that this does not automatically truncate overflowing text. For text truncation with ellipsis, use the [Clamp](/framework_v2/clamp) component.

[#](https://usetrmnl.com/framework_v2/content_limiter#custom-height-threshold)

### Custom Height Threshold

You can specify a custom maximum height using the `view--half_horizontal` attribute.

Custom Height Example

Contrary to what one might think, the Lorem ipsum text, despite being meaningless, has noble origins.

Objectively composed of unrelated words, Lorem ipsum owes its existence to Marco Tullio Cicerone and to some steps of his De finibus bonorum et malorum (The highest good and the highest evil) written in 45 BC, a classic of Latin literature dating back more than 2000 years ago.

Custom Height Example

Contrary to what one might think, the Lorem ipsum text, despite being meaningless, has noble origins.

Objectively composed of unrelated words, Lorem ipsum owes its existence to Marco Tullio Cicerone and to some steps of his De finibus bonorum et malorum (The highest good and the highest evil) written in 45 BC, a classic of Latin literature dating back more than 2000 years ago.

Content Limiter
Custom Max Height: 140px

`view--half_horizontal`

[#](https://usetrmnl.com/framework_v2/content_limiter#default-height-thresholds)

### Default Height Thresholds

If no custom height is specified, Content Limiter uses the following default thresholds based on view type:

`view--half_horizontal`
400px

`view--half_horizontal`
400px

`view--half_horizontal`
160px

`view--half_horizontal`
160px

[Fit Value

Automatically resize numbers and values to fit within their containers

Previous](/framework_v2/fit_value)

[Pixel Perfect

Ensure text renders with crisp edges by aligning to the pixel grid

Next](/framework_v2/pixel_perfect)

    [Framework Index](/framework_v2)

---

## Pixel Perfect

*Source: https://usetrmnl.com/framework_v2/pixel_perfect*

# Pixel Perfect

      The Pixel Perfect system ensures text renders with crisp edges by aligning text precisely to the pixel grid.
      We use specialized pixel fonts designed to work at specific pixel sizes, producing the sharpest possible rendering
      and preventing sub-pixel rendering issues that cause text to appear blurry or inconsistently bold in final renders when converting layouts to a 1-bit color space for e-ink displays.

[#](https://usetrmnl.com/framework_v2/pixel_perfect#usage)

### Usage

To enable pixel perfect text rendering, add the `data-pixel-perfect="true"`
attribute to your text element.

Pixel Perfect Title

This text is rendered with pixel perfect alignment, ensuring that each line falls exactly on the pixel grid. Depending on the parent width, the system automatically breaks text into lines and adjusts each line's width.

This produces crisp, sharp text edges that renders perfectly in a 1-bit color space.

Pixel Perfect
With Pixel Perfect Applied

`data-pixel-perfect="true"`

[#](https://usetrmnl.com/framework_v2/pixel_perfect#why)

### Why?

Text rendering on digital displays involves complex anti-aliasing techniques to make text appear smooth at various sizes.
This process creates partially opaque pixels (gray pixels) at the edges of characters to create the illusion of smoothness.

When text isn't perfectly aligned to the pixel grid, these anti-aliased pixels can appear inconsistently, particularly with centered text.
This is especially problematic for e-ink displays that use a 1-bit color space (just black and white, no grays), where anti-aliased gray pixels
are forced to become either fully black or fully white. The result is text that appears randomly bold or distorted in final renders,
creating an unprofessional and difficult-to-read presentation.

Our system uses pixel fonts that are specifically designed to work at particular pixel sizes and their multipliers. These fonts
are meticulously crafted to perfectly align with the pixel grid, ensuring each character renders with maximum sharpness and clarity.
By combining these specialized fonts with our pixel-perfect alignment technique, we achieve optimal text rendering for e-ink displays.

[#](https://usetrmnl.com/framework_v2/pixel_perfect#how-it-works)

### How It Works

The Pixel Perfect system works by applying the following techniques to elements with `data-pixel-perfect="true"`:
- The system measures the parent element's width to determine whether it's odd or even
- The text content is broken into individual lines
- Each line is wrapped in a span element
- Each span's width is adjusted to match the parent's pattern: even widths for even-width parents, odd widths for odd-width parents

By analyzing the parent container's dimensions and adjusting each line accordingly, the system ensures text falls precisely on the pixel grid.
This precise adjustment ensures text is perfectly aligned to the pixel grid, eliminating sub-pixel rendering issues on 1-bit displays.

[#](https://usetrmnl.com/framework_v2/pixel_perfect#cross-platform-consistency)

### Cross-Platform Consistency

Different browsers render text differently across operating systems. For example, Chrome on macOS handles font rendering
differently than Chrome on Linux or Windows. This means developers see different results depending on their development environment.

The Pixel Perfect system unifies the developer experience across platforms by enforcing consistent rendering rules regardless of the browser or operating system.
This ensures that text renders with the same crispness and weight consistency on the final e-ink display, regardless of where it was developed or previewed.

[Content Limiter

Change font size when content overflows to fit within the container

Previous](/framework_v2/content_limiter)

    [Framework Index](/framework_v2)

---

---

## Summary

- Total pages processed: 39
- Successfully scraped: 39
- Failed: 0
- Generated on: 2025-08-12 02:07:38

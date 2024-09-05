# Conventions

Dit document beschrijft de conventies die we volgen in ons project om consistentie, leesbaarheid, en onderhoudbaarheid te waarborgen.

## 1. Blade Components Gebruik

### 1.1 Custom Blade Components
- Gebruik van custom Blade components om herbruikbare stukken HTML/CSS/JS te structureren.
- Voorbeelden:
  - `<x-layouts.base>` voor het basislayout component.
  - `<x-slot:heading>` voor het invoegen van inhoud in een named slot.

### 1.2 Slot Conventie
- Gebruik van named slots om dynamisch inhoud te vullen in componenten.

### 1.3 Attributes en Data-Binding
- Gebruik data-binding voor attributen in Blade componenten.
- Voorbeeld: `:standard="true"` in `<x-text>` component voor het doorgeven van waarden of variabelen.

## 1.4 Variabel naamgeving
- Consistent gebruik van lowerCamelCase
- Voorbeeld: `submitForm`

## 2. CSS Classes en Tailwind CSS

### 2.1 Utility-first CSS met Tailwind CSS
- Gebruik van Tailwind CSS utility classes voor styling.
- Voorbeelden: 
```js
`w-1/3`, `flex`, `gap-4`, `items-start`, `text-red-600`, `font-bold`
```
etc.


### 2.2 Responsieve Layout
- Gebruik van verhoudingen (`w-1/3`, `w-2/3`) om een flexibele en responsieve layout te creëren.

### 3.2 ARIA en Alt Text
- Gebruik van `alt`-attributen in afbeeldingen om toegankelijkheid te waarborgen.
- Voorbeeld: 
```html
<img class="mt-4" src="https://picsum.photos/id/237/400/300" alt="random img">
```

## 4. Code Style

### 4.1 Code Indentation
- Houd consistentie in code-indenting om leesbaarheid en onderhoudbaarheid te verbeteren.



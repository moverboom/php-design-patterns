# Bridge (also known as Handle/Body)

Bridge pattern is about preferring composition to inheritance.
Implementation details are pushed from a hierarchy to another object with a separate hierarchy.
This prevents an explosion of subclasses.
So in this example, instead of creating an About, AboutLight, AboutDark,
Contact, ContactLight and ContactDark (inheritance), there are only two pages (About and Contact) and
the theme is passed as argument (composition).

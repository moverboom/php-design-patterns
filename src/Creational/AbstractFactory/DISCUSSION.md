# Abstract Factory
Provide an interface for creating families of related or dependent objects without
specifying the concrete classes.

Includes an AbstractFactory which indicates what components can be created,
and the subclasses of that factory can create those components.
For example, an abstract WindowFactory and two subclasses LightThemeWindowFactory and
DarkThemeWindowFactory.
Because the factory creates the objects, switching theme is as easy as changing
the factory that is used. This also means that the code using the factory has no idea
of what concrete implementations exist.

Another advantage of this pattern is also that when a group of subclasses is designed to work
together (dark theme components can only use other dark theme components for example), this
pattern makes sure that only the correct subclasses are used.

# Flyweight
A flyweight models a concept or entity which is normally too plentiful to represent with objects.
For example, a text editor could create an object for each character in the document. But
this would lead to a huge amount of objects. Instead, a flyweight object is created for
each character and the location and styling of the character is passed as arguments.
A flyweight is an object that minimizes memory use by sharing as much data as possible with other similar objects; it is a way to use objects in large numbers when a simple repeated representation would use an unacceptable amount of memory.

Only use a flyweight when all of the following are true:
* An application uses a large number of objects
* Storage costs are high because of the sheer quantity of objects
* Most object state can be made extrinsic
* May groups of objects may be replaced by relatively few shared objects once extrinsic state is removed
* The application doesn't depend on object identity

Not all objects have to be shared, the flyweight interface only enabled sharing.

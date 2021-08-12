# Decorator
A Decorator provides a flexible alternative to subclassing for extending functionality.
It does that by wrapping one object around another. This also allows us to only add
functionality to certain objects instead of the whole class.
The decorator conforms to the same interface as the object it decorates, forwards requests
to it and can add functionality before or after forwarding the requests.
This pattern can also help prevent an explosion of subclasses.

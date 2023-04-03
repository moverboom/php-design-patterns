# Memento
Without violating encapsulation, capture an externalize an object's
internal state so that the object can be restored to this state later.
This pattern is also known as Token.
Sometimes you want to be able to restore an object to its previous state to, for example,
allow users to undo operations or recover the previous state in case of an exception.
The problem here is trying not to violate encapsulation, which would happen is the state is exposed.
The pattern consists of two parts: the _memento_ object and the _originator_.
Only the originator can create and read the memento objects. The memento object stores the current state.
The memento object are kept bij a care taker. A care taker can be any piece of code that requests a memento object
from the originator. The advantage of this is that the originator doesn't have to keep track of what mementos
there are. This also means that when a care taker is done with a certain operation it can just discard
the requested mementos.
An interesting part about this pattern is that mementos have two interfaces.
One for the very limit (narrow) for the care taker and a mode elaborate one (wide) for the originator, so
it can request the state stored in the memento.
Depending on how the mementos are used, they can store incremental state changes (+50 dollars) or the actual state
at the time they were created (1000 dollars).
In my implementation I chose to let the care taker be a wrapper around Editor.
This keeps al mementos in one place.

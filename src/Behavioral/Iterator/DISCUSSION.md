# Iterator
The Iterator pattern allows you to travers a list sequentially, while not exposing
internals of the list.
It consists of two part, a list in some form and an iterator that handles traversing it.
By separating these two parts, different types of traversal can be added without
changing the list class. For example, we could implement a simple SequentialIterator,
a SkipListIterator or a ReverseIterator.

There are two kinds of iterators, internal and external. When the client controls the
iteration, it is an external iterator. The client would have to call `next()` and `valid()` (or similar)
itself. An internal iterator handles this, well uhm, internally.

The design-patterns-for-humans repository has an incorrect example of this design pattern.
In their example the list and iterator are in the same class, while the whole point
of this pattern is to separate the two as to not blow up the list interface and
allow for easy substitution of the iterator algorithm used.

These iterators could easily be extended with the decator pattern.
We could for example add a FilteredSequentialIterator, or a WrapAroundIterator that
returns to the first element when the last is reached allowing for endles iteration.
Or the Memento pattern to resume iteration at a later point in time.

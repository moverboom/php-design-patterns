# Observer
Define a one-to-many relationship between objects so that when one object changes state, all its
dependents are notified and updated. Also knows as publish-subscribe.
The key components in this pattern are the _subject_ and _observer_.
A subject can have many observers, there's no limit to this. They are all notified when the subjects' state
changes, and in turn they query the subject for the data.

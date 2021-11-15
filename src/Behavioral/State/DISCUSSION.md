# State
Allow an object to alter its behavior when its internal state changes.
The idea in this pattern is to introduce an abstract class to represent the state.
This abstract class is subclassed to implement behavior specific to each state.

This pattern is particularly useful when an object's behavior changes at run-time depending on the state
and when operations have large multipart conditional statements that depend on the state.

Both the Context (original class) and State classes can decide which State succeeds another. In my opinion it makes
the most sense the let State classes handle this, since that keeps all state checks out of the Context.
A Context may pass itself as an argument to the State object.

# Strategy
The strategy pattern allows the algorithm that is used to be changed at runtime.
It is useful when related classes only differ in only in the algorithm they should use.
The pattern consists of a few components: a context class, a strategy interface and concrete strategy implementations.
The context contains a reference to a strategy and passes all requests to it.
Clients using the context can set the strategy. This is the only drawback of the strategy design pattern,
clients must know what strategies are available.

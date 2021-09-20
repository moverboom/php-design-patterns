# Chain Of Responsibility
Avoid coupling the sender of a request to its receiver by giving more than
one object a chance to handle the request. Chain the receiving objects
and pass the request along the chain until an object handles it.

This reduces coupling because the sender doesn't know the receiver. But this also means
that a request might never be handled at all, and the sender would never know this.

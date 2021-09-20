# Proxy (Also known as surrogate)
Provide a surrogate or placeholder for another object to control
access to it. Basically puts an object of the same type in front
of the target object, acting as a proxy.
There are a few types:
* Remote proxy: provides a local representative for and object in a different address space
* Virtual proxy: creates expensive objects on demand
* Protection proxy: checks if the caller has access to the target object
* Smart reference:
  - Count references to the object so it can be deleted when there are no more (not needed in php)
  - Load a persistent object into memory when it's first used
  - Checking if the real object is locked to prevent multiple writes

Doctrine also uses a proxy to provide lazy loading for an entity's properties.

Decorator Pattern focuses on dynamically adding functions to an object,
while Proxy Pattern focuses on controlling access to an object.
While some proxies are implemented exactly like a decorator, some are not.
A decorator also receives a delegate of the same type as a constructor argument to add
functionality to. A proxy can receive an object of the same type, but also just a
hostname and credentials for example to download a file.

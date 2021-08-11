# Prototype
Allows to create new instances by copying an existing one and changing what
needs to be changed. Can very easily be achived in PHP with `clone`. Keep in mind that this
creates a *shallow* copy, so any references the original object holds will still be references.

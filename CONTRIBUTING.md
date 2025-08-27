# Contributing

We welcome bug reports, feature requests, and code contributions in a pull request.

For most pull requests, we request that you identify or create an associated issue that has the necessary context. We use these issues to reach agreement on an approach and save the PR author from having to redo work. Fixing typos or documentation issues likely do not need an issue; for any issue that introduces substantial code changes, changes the public interface, or if you aren't sure, please find or [create an issue](https://www.github.com/vouchsafe/vouchsafe-php).

## Generated code

This project has a combination of manually maintained code and code generated with [openapi-generator](https://github.com/OpenAPITools/openapi-generator). If your contribution involves changes to generated code, please call this out in the issue or pull request as we will likely need to make a change to the input OpenAPI specification before accepting the contribution.

Everything in the `/src/openapi` subfolder is generated code.

## Compatibility with supported language and runtime versions

This project supports [many different language and runtime versions](README.md#requirements) and we may not be able to accept any contribution that does not work on _all_ supported versions. If, after discussing the approach in the associated issue, your change must use an API/feature that isn't available in all supported versions, please call this out explicitly in the issue or pull request so we can help figure out the best way forward.

## Set up your dev environment

Please refer to this project's [README.md](README.md#development) for instructions on how to set up your development environment.

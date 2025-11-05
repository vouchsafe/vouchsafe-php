# Makefile (repo root)

SPEC_URL=https://app.vouchsafe.id/openapi/swagger.json

GEN_OPTS= \
  -g php \
  -o src/openapi \
  -p packageName=Vouchsafe,invokerPackage=Vouchsafe\\OpenAPI,srcBasePath=src \
  --type-mappings date-time=string,DateTime=string \
  --skip-validate-spec

generate:
	docker run --rm -v "${PWD}:/local" openapitools/openapi-generator-cli generate -i $(SPEC_URL) $(GEN_OPTS) -o /local/src/openapi
	composer dump-autoload
	@echo "✅ Regenerated  into src/openapi"
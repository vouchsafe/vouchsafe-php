# Location of your OpenAPI spec
SPEC_URL=https://app.vouchsafe.id/openapi/swagger.json

# Options for PHP generator
GEN_OPTIONS= \
  -g php \
  -o . \
  -p packageName=Vouchsafe,invokerPackage=Vouchsafe,srcBasePath=src \
  --skip-validate-spec

# Default target: regenerate SDK
generate:
	openapi-generator generate -i $(SPEC_URL) $(GEN_OPTIONS)
	composer dump-autoload
	@echo "✅ PHP client regenerated and autoload refreshed"

# Optional cleanup target
clean:
	rm -rf src/ docs/ test/ composer.lock vendor/
	@echo "🧹 Cleaned generated files (run make generate to rebuild)"

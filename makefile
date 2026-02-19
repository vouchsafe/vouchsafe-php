# Makefile (repo root)

SPEC_URL=https://app.vouchsafe.id/openapi/swagger.json
SPEC_FILE=open-api.json

generate:
	curl -fsSL "$(SPEC_URL)" -o "$(SPEC_FILE)"
	vendor/bin/jane-openapi generate
	composer dump-autoload
	@echo "✅ Regenerated into src/openapi"

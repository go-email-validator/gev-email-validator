USER_ID=`id -u`
USER_GROUP=`id -g`
DOCKER_USER_RUN="$(USER_ID):$(USER_GROUP)"

OPENAPI_PATH=${PWD}/../ev.openapiv3.yaml

define swagger_codegen
	$(eval GEN_LANG=$(1))
	$(eval GEN_DIR=$(or $(2),$(GEN_LANG)))
	mkdir -p $(GEN_DIR)
	docker run --user "$(DOCKER_USER_RUN)" --rm -v ${PWD}/$(GEN_DIR):/local/out -v $(OPENAPI_PATH):/local/openapi.yaml swaggerapi/swagger-codegen-cli-v3:latest generate \
	-i /local/openapi.yaml \
	-l $(GEN_LANG) \
	-o /local/out/
endef

define openapi_generator
	$(eval GEN_LANG=$(1))
	$(eval GEN_DIR=$(or $(2),$(GEN_LANG)))
	mkdir -p $(GEN_DIR)
	docker run --user "$(DOCKER_USER_RUN)" --rm -v ${PWD}/$(GEN_DIR):/local/out -v $(OPENAPI_PATH):/local/openapi.yaml  openapitools/openapi-generator-cli:latest generate \
	-i /local/openapi.yaml \
	-g $(GEN_LANG) \
	-o /local/out/
endef

# docker run --rm openapitools/openapi-generator-cli:latest generate

update: gen cp.openapi.file

gen: gen.go gen.php gen.python gen.java gen.javascript gen.csharp

PHP_FIND=find php -type f -name '*.php' ! -path "*/vendor/*"

gen.php:
	$(call openapi_generator,php)
	$(PHP_FIND) -exec sed -i 's/public const DISCRIMINATOR = null;/const DISCRIMINATOR = null;/g' {} \;
	$(PHP_FIND) -exec sed -i -E 's/(= |\(|n )(\$$.+)? +\?\?/\1isset(\2) ? \2 :/g' {} \;
	$(PHP_FIND) -exec sed -i 's/IsCatchall/IsCatch_all/g' {} \;
	$(PHP_FIND) -exec sed -i 's/PHP version 7.2/PHP version 5.6/g' {} \;

gen.go:
	$(call openapi_generator,go)

gen.python:
	$(call openapi_generator,python)

gen.python.openapi:
	$(call openapi_generator,python)

gen.java:
	$(call openapi_generator,java)

gen.javascript:
	$(call openapi_generator,javascript)

gen.csharp:
	$(call openapi_generator,csharp)

cp.openapi.file:
	cp $(OPENAPI_PATH) ./
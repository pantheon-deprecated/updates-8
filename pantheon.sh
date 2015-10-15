#
# Run a test on Pantheon, more or less the same
# way that Circle would run it.
#
export PEMAIL=YOUREMAIL@pantheon.io
export PPASS=YOURPASSWORD
export SITE_NAME="Update Test Site"
export PSITE=updates-test
export PENV=dev
export DOMAIN=.pantheon.io

ci/ci post-checkout
ci/init-pantheon

ci/ci pre-test
ci/ci test
ci/ci post-test

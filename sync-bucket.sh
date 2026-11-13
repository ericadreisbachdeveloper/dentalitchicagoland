#!/bin/bash

# sync-bucket.sh
# Syncs local images to a Linode Object Storage bucket using s3cmd.
# Uses s3cmd for all file types to avoid the AWS CLI bug with Linode's
# empty <Message> XML error responses (aws/aws-cli issue #10161).
#
# Usage:
#   ./sync-bucket.sh
#


BUCKET_NAME="localseo"
REGION_HOST="us-ord-10.linodeobjects.com"
SOURCE="./assets/img/"
CACHE="Cache-Control:public, max-age=2592000"
# REFERER="https://YOUR-SITE-DOMAIN/"   # must match the bucket policy

BUCKET="s3://${BUCKET_NAME}"

echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "  Syncing $SOURCE → $BUCKET"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""

sync_type () {
  local label="$1"; local mime="$2"; shift 2
  local includes=()
  for ext in "$@"; do includes+=(--include "*.${ext}"); done

  echo "▸ ${label}..."
  s3cmd sync "$SOURCE" "$BUCKET" \
    --exclude "*" \
    "${includes[@]}" \
    --mime-type="$mime" \
    --add-header="$CACHE" \
    --skip-existing
}

sync_type "JPEGs" "image/jpeg"    jpg jpeg
sync_type "PNGs"  "image/png"     png
sync_type "WebPs" "image/webp"    webp
sync_type "GIFs"  "image/gif"     gif
sync_type "SVGs"  "image/svg+xml" svg
sync_type "MP4s"  "video/mp4"     mp4

# Codex Environment Guide

## Goal
Diagnose and fix BuddyBoss + LearnDash incompatibility where course lessons do not display.

## Editable Areas
- `themes/buddyboss-theme-child/` → safe place for template overrides and fixes.
- `plugins/` → only my own plugins (custom code).

## Read-Only Areas
- `plugins/sfwd-lms/` (LearnDash premium).
- `plugins/buddyboss-platform/` and `plugins/buddyboss-platform-pro/` (BuddyBoss premium).
- `themes/buddyboss-theme/` (core theme files).

## Tasks for Codex
1. Add diagnostics (log queries & filters) to detect why lessons are hidden.
2. Implement fixes only through **child theme** overrides or custom plugins I own.
3. Add feature flags (constants or settings) for each fix.
4. Document changes clearly in this repo.

## Tests
- Lessons should show in `[ld_lesson_list course_id="93"]`.
- Lessons should show inside the course page (`sfwd-courses`).
- Membership/visibility rules must still work when fixes are disabled.

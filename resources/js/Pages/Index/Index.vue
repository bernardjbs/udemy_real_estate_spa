<template>
  <div>Index Vue</div>
  <Link href="/hello">Show Page</Link>
  <p>The message is: {{ message }}</p>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
defineProps({
    message: String,
  })
</script>